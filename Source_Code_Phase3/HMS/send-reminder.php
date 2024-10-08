
    <?php
    session_start(); // Start the session
    
    // Include PHPMailer library
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    // Include autoload.php file generated by Composer
    require 'vendor/autoload.php';
    
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['id']) && isset($_POST['email'])) { // Check if $_SESSION['id'] and $_POST['email'] are set
        // Validate email
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Handle invalid email
            echo "Invalid email format";
            exit();
        }
    
        // Database connection details
    $host = '127.0.0.1'; // Server IP address
    $dbname = 'geekytechs'; // Database name
    $username = 'root'; // Database username
    $password = ''; // Database password is empty
    
        try {
            // Create a new PDO instance
            $dbh = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            
            // Set PDO error mode to exception
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Prepare SQL statement to fetch appointment details
            $stmt = $dbh->prepare("SELECT doctorName, doctorSpecialization, consultancyFees, appointmentDate, appointmentTime FROM appointment JOIN doctors ON doctors.id=appointment.doctorId WHERE appointment.userId=:userId");
            $stmt->bindParam(':userId', $_SESSION['id']); // Bind user ID parameter
    
            // Execute the prepared statement
            $stmt->execute();
    
            // Fetch all appointment details
            $appointments = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            // PHPMailer object
            $mail = new PHPMailer(true); // Passing `true` enables exceptions
    
            // Loop through each appointment and send reminder email
            foreach ($appointments as $appointment) {
                $mail->clearAllRecipients(); // Clear previous recipients for each iteration
                try {
                    // Server settings
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true; // Enable SMTP authentication
                    $mail->Username = 'vishwitha12@gmail.com'; // SMTP username
                    $mail->Password = 'ctihpywmujmbrlmz'; // SMTP password
                    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 587; // TCP port to connect to
    
                    // Recipients
                    $mail->setFrom('vishwitha12@gmail.com', 'Clinic Name Here');
                    $mail->addAddress($email); // Add a recipient
    
                    // Content
                    $mail->isHTML(true); // Set email format to HTML
                    $mail->Subject = 'Appointment Reminder';
                    $mail->Body = 'Doctor Name: ' . $appointment['doctorName'] . '<br>'
                                . 'Specialization: ' . $appointment['doctorSpecialization'] . '<br>'
                                . 'Consultancy Fee: ' . $appointment['consultancyFees'] . '<br>'
                                . 'Appointment Date / Time: ' . $appointment['appointmentDate'] . ' / ' . $appointment['appointmentTime'];
    
                    $mail->send();
                } catch (Exception $e) {
                    // Log error or handle it as needed
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                }
            }
    
            // Redirect back to notification.php with success message
            header('Location: notification.php?success=true');
            exit();
        } catch(PDOException $e) {
            // If an error occurs during database connection or query execution, handle it here
            echo "Database error: " . $e->getMessage();
        }
    } else {
        // If form is not submitted or session ID or email is not set, redirect back to notification.php
        header('Location: notification.php');
        exit();
    }
    ?>
    