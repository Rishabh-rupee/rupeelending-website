 <?php
    if (isset($_POST["submit"])) {
        // Retrieve form values
        $loanAmount = $_POST["loanAmount"];
        $monthlyIncome = $_POST["monthlyIncome"];
        $loanPurpose = $_POST["loanPurpose"];
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $birthDate = $_POST["birthDate"];
        $panCard = $_POST["panCard"];
        $gender = $_POST["gender"];
        $state = $_POST["state"];
        $city = $_POST["city"];
        $pincode = $_POST["pincode"];

        // Construct the email content
        $subject = "Loan Application from Rupeelending";
        $message = "Dear Admin,\n\n";
        $message .= "You have received a new loan application. Below are the details:\n\n";
        $message .= "Loan Details:\n";
        $message .= "Loan Amount: $loanAmount\n";
        $message .= "Monthly Income: $monthlyIncome\n";
        $message .= "Purpose of Loan: $loanPurpose\n\n";
        $message .= "Personal Details:\n";
        $message .= "Full Name: $fullname\n";
        $message .= "Email: $email\n";
        $message .= "Mobile: $mobile\n";
        $message .= "Date of Birth: $birthDate\n";
        $message .= "PAN Card: $panCard\n";
        $message .= "Gender: $gender\n";
        $message .= "State: $state\n";
        $message .= "City: $city\n";
        $message .= "Pincode: $pincode\n\n";
        $message .= "Kind regards,\nRupeelending";


        $to_user = $email; // User's email address
        $from = "care@rupeelending.com";
        $headers = "From: $from";

        // Send the emails
        $ok = mail($to_user, $subject, $message, $headers);
        $ok = mail("care@rupeelending.com", $subject, $message, $headers);

        // Check if the mail was sent successfully
        if ($ok == true) {
            echo "<script>alert('Form Submitted Successfully');</script>";
            echo "<script>window.location.href='apply-now.php';</script>";
        } else {
            echo "<script>alert('Form Not Submitted. Please try again.');</script>";
            echo "<script>window.location.href='apply-now.php';</script>";
        }
    }
    ?>
