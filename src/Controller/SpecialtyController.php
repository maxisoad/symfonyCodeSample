<?php

namespace App\Controller;

use App\Entity\Specialty;
use App\Entity\Professional;
use App\Form\SpecialtyType;
use App\Repository\SpecialtyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

/**
 * @Route("/specialty")
 */
class SpecialtyController extends AbstractController
{
    /**
     * @Route("/", name="specialty_index", methods={"GET"})
     */
    public function index(SpecialtyRepository $specialtyRepository): Response
    {
        return $this->render('specialty/index.html.twig', [
            'specialties' => $specialtyRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="specialty_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $specialty = new Specialty();
        $form = $this->createForm(SpecialtyType::class, $specialty);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($specialty);
            $entityManager->flush();

            return $this->redirectToRoute('specialty_index');
        }

        return $this->render('specialty/new.html.twig', [
            'specialty' => $specialty,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="specialty_show", methods={"GET"})
     */
    public function show(Specialty $specialty): Response
    {
        return $this->render('specialty/show.html.twig', [
            'specialty' => $specialty,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="specialty_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Specialty $specialty): Response
    {
        $form = $this->createForm(SpecialtyType::class, $specialty);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('specialty_index', [
                'id' => $specialty->getId(),
            ]);
        }

        return $this->render('specialty/edit.html.twig', [
            'specialty' => $specialty,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="specialty_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Specialty $specialty): Response
    {
        if ($this->isCsrfTokenValid('delete'.$specialty->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($specialty);
            $entityManager->flush();
        }

        return $this->redirectToRoute('specialty_index');
    }

    /**
     * @Route("/{id}/report", name="specialty_report", methods={"GET"})
     */
    public function report(Request $request, Specialty $specialty): Response
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($pdfOptions);

        $repository = $this->getDoctrine()->getRepository(Professional::class);
        $professionals = $repository->findBy(['id_specialty' => $specialty->getId()]);

        $html = $this->renderView('specialty/report.html.twig', [
            'professionals' => $professionals,
        ]);
        
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("report.pdf", [
            "Attachment" => false
        ]);
    }
}
