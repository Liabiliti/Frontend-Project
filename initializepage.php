<?php
$pagename = basename($_SERVER['PHP_SELF']);

switch ($pagename){
  case "GuardianChild.php":
    $infoArray = array("GuardianChild","GuardianChildID","GuardianID","ChildID");
    break;
  case "GuardianPayment.php":
    $infoArray = array("GuardianPayment","GuardianPaymentID","GuardianID","PaymentID");
    break;
  case "DoctorChild.php":
    $infoArray = array("DoctorChild","DoctorChildID","DoctorID","ChildID");
    break;
  case "ChildMedicine.php":
    $infoArray = array("ChildMedicine","ChildMedicineID","ChildID","MedicineID","Dosage");
    break;
  case "ChildAllergy.php":
    $infoArray = array("ChildAllergy","ChildAllergyID","ChildID","AllergyID","Severity");
    break;
  case "Medicine.php":
    $infoArray = array("Medicine","MedicineID","MedicineType","MedicineName","MedicineDescription");
    break;
  case "Allergy.php":
    $infoArray = array("Allergy","AllergyID","AllergyType","AllergyName","AllergySymptoms","AllergyDescription");
    break;
  case "StaffChild.php":
    $infoArray = array("StaffChild","StaffChildID","StaffID","ChildID1","ChildID2","ChildID3","ChildID4");
    break;
  case "Child.php":
    $infoArray = array("Child","ChildID","ChildFirstName","ChildLastName","ChildDOB","ChildGender");
    break;
  case "Payment.php":
    $infoArray = array("Payment","PaymentID","PaymentDueDate","AmountDue","PaymentPaidDate","ActualAmountPaid");
    break;
  case "Doctor.php":
    $infoArray = array("Doctor","DoctorID","DoctorLastName","DoctorStreetAddress","DoctorTown","DoctorState","DoctorPostcode","DoctorPhoneNumber");
    break;
  case "Staff.php":
    $infoArray = array("Staff","StaffID","StaffFirstName","StaffLastName","StaffGender","StaffHomePhone","StaffWorkPhone","StaffonDuty");
    break;
  case "Guardian.php":
  $infoArray = array("Guardian","GuardianID","GuardianFirstName","GuardianLastName","GuardianStreetAddress","GuardianTown","GuardianState","GuardianPostcode", "GuardianPhoneNumber");
    break;
}
$_SESSION['CRUDdata'] = $infoArray;
?>
