<?php

namespace App\Controller;

use App\Entity\Patient;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ApiPatientController extends AbstractController
{
    /**
     * @Route("/api/patient", name="api_patient_get", methods={"GET"})
     */
    public function index(ManagerRegistry $manager)
    {
        // Update : 22/01/23 (getDoctrine est déprécié donc use ManagerRegistry instead !!!)

        return $this->json($manager->getRepository(Patient::class)->findAll(), 200, []);
    }

    /**
     * @Route("/api/patient", name="api_patient_post", methods={"POST"})
     */
    public function addPatient(Request $request, SerializerInterface $serrialize, EntityManagerInterface $em, ValidatorInterface $validator)
    {
        $json = $request->getContent();

        try {
            $patients = $serrialize->deserialize($json, Patient::class, 'json');

            $errors = $validator->validate($patients);

            if (count($errors) > 0) {
                return $this->json($errors, 400);
            }

            $em->persist($patients);
            $em->flush();

            return $this->json($patients, 201, []);
        } catch (NotEncodableValueException $e) {
            return $this->json([
                'status' => 400,
                'message' => $e->getMessage(),
            ], 400);
        }
    }
}
