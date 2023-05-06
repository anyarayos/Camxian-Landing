<?php
if (isset($_POST['sr_no'])) {
    $sr_no = $_POST['sr_no'];

    // SELECT complianceType FROM application WHERE srNo = $sr_no;

    $compliance_type = "FOR PAYMENT";
    $status_message = "";

    if ($compliance_type == 'FOR PAYMENT') {
        $status_message = "Congratulations! Your application has been approved! For us to proceed with the installation kindly settle the advance payment, details sent to you via text and emailed. Thank you!
        Click the link for accredited PLDT Merchant.";
    } else if ($compliance_type == 'COMPLIANCE') {
        $status_message = "Your application is underway! Kindly submit the required documents prior for approval. Contact your Agent.";
    } else if ($compliance_type == 'FOR APPROVAL') {
        $status_message = "Your Application is for approval, kindly wait for the result. Thank you!";
    } else if ($compliance_type == 'FOR INSTALLATION') {
        $status_message = "Congratulations! Your Application has been Approved! Please wait for the PLDT team to contact for installation. Thank you!";
    } else if ($compliance_type == 'CANCELLED') {
        $status_message = "Unfortunately, your application has been cancelled. Please see remarks.";
    } else {
        $status_message = "";
    }
}
?>

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
</p>