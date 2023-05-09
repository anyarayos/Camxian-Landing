<?php
include("db_conn.php");
if (isset($_POST['sr_no'])) {
    $sr_no = $_POST['sr_no'];
    $compliancetype = '';
    $remarks = '';

    // SELECT complianceType FROM application WHERE srNo = $sr_no;
    // prepare and bind
    $stmt = $conn->prepare("SELECT pldtStatus, remarks FROM application WHERE srNo = (?)");
    $stmt->bind_param("s", $sr_no);

    $stmt->execute();

    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        // echo $row['pldtStatus'];
        $compliancetype = $row['pldtStatus'];
        $remarks = $row['remarks'];
    }

    $compliance_type = trim($compliancetype);
    // 6. Close the statement and connection
    $stmt->close();

    $status_message = "";

    trim($compliance_type, " ");

    if ($compliance_type == 'FOR PAYMENT') {
        $status_message = "Congratulations! Your application has been approved! For us to proceed with the installation kindly settle the advance payment, details sent to you via text and emailed. Thank you!
        Click the link for accredited PLDT Merchant.";
    } else if ($compliance_type == 'COMPLIANCE' || $compliance_type == 'FOR COMPLIANCE') {
        $status_message = "Your application is underway! Kindly submit the required documents prior for approval. Contact your Agent.";
    } else if ($compliance_type == 'FOR APPROVAL') {
        $status_message = "Your Application is for approval, kindly wait for the result. Thank you!";
    } else if ($compliance_type == 'FOR INSTALLATION') {
        $status_message = "Congratulations! Your Application has been Approved! Please wait for the PLDT team to contact for installation. Thank you!";
    } else if ($compliance_type == 'CANCELLED') {
        $status_message = "Unfortunately, your application has been cancelled. Please see remarks.";
    } else {
        $status_message = "The SR number provided does not exist. Double-check the tracking number or contact your agent for clarifications.";
    }
?>
    <!-- Visible only if SR number is provided -->
    <div class="text-align-center">
        <h2>Service Reference Number</h2>
        <p class="bold" style="font-size:2em"><?php echo $sr_no ?></p>

    </div>
    <!-- <h2>Status:</h2> -->
    <p>
        <span style="font-weight: bold; ">STATUS:</span>
        <?php echo $status_message ?>
        <!-- FOR PAYMENT -->
        <?php if ($compliance_type == 'FOR PAYMENT') { ?>
            Click the link for accredited PLDT Merchant. <a href="https://pldthome.com/paymentcenters" target="_blank">pldthome.com/paymentcenters</a>
        <?php } ?>
        <?php if ($compliance_type == 'CANCELLED') { ?>
            <span style="color: red;">REMARKS: <?php echo $remarks ?></span>
        <?php } ?>
    </p>


<?php
}
?>