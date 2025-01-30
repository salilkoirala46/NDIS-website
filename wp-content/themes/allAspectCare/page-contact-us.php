<?php 
    get_header();
?>

 <div class="container-fluid bg-light" >
            <div class="container pb-5 py-5">
                    <h2 class="pb-2 border-bottom text-primary">Contact Us</h2>
                    <p class="lead"> 
                    <div class = "row">
                        <div class = "col-md-6 order-md-2 mb-4">
                            <img src="<?php echo get_theme_file_uri('img/contact-us.png');?>" class="d-block mx-lg-auto img-fluid" alt="Contact Us Image" width="600" height="600" loading="lazy">
                        </div>
                        <div class = "col-md-6 order-md-1" id="form-container">
                            <form class = "needs-validation" action = "sendEmail.php" method ="POST"  novalidate = "">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="YourName">Your name</label>
                                        <input type="text" class="form-control" id="YourName" placeholder="" value="" required="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="subject">Subject</label>
                                    <input type="subject" class="form-control" id="subject" placeholder="">
                                </div>

                                <div class="mb-3">
                                    <label for="country">Services</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected value="0">Disability Care</option>
                                        <option value="1">Personal Care</option>
                                        <option value="2">Domestic Assistance</option>
                                        <option value="3">Community Activities</option>
                                        <option value="4">Sleep Over & 24 hour care</option>
                                        <option value="5">Transport Assistance</option>
                                        <option value="6">Daily and Life Skill Development</option>
                                        <option value="7">Group and Centre Based Activities</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 120px"></textarea>
                                            <label for="message">Message</label>
                                        </div>

                                </div>
                                <hr class="mb-4">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Submit Enquiry</button>
                            </form>
                        </div>
                    </div>
                    </oo>
            </div>
        </div>
        <script>
            document.querySelector('.needs-validation').addEventListener('submit', function(event) {
                let isValid = true;

            // Helper function to sanitize inputs and check for <script> tags
            function sanitizeAndCheckForScript(input) {
                // Check for <script> tags
                const scriptTagPattern = /<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi;
                if (scriptTagPattern.test(input)) {
                    return { sanitizedInput: '', hasScriptTag: true };
                }
                
                // Sanitize input to prevent XSS
                const element = document.createElement('div');
                element.innerText = input;
                return { sanitizedInput: element.innerHTML, hasScriptTag: false };
            }

            // Validate and sanitize name input
            const nameInput = document.getElementById('YourName');
            let nameResult = sanitizeAndCheckForScript(nameInput.value.trim());
            if (nameInput.value.trim() === '') {
                isValid = false;
                nameInput.setCustomValidity('Please enter your name.');
            } else if (nameResult.hasScriptTag) {
                isValid = false;
                nameInput.setCustomValidity('Script tags are not allowed.');
            } else {
                nameInput.value = nameResult.sanitizedInput;
                nameInput.setCustomValidity('');
            }

            // Validate and sanitize email input
            const emailInput = document.getElementById('email');
            const emailValue = emailInput.value.trim();
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            let emailResult = sanitizeAndCheckForScript(emailValue);

            if (emailValue === '') {
                isValid = false;
                emailInput.setCustomValidity('Please enter your email.');
            } else if (!emailPattern.test(emailValue)) {
                isValid = false;
                emailInput.setCustomValidity('Please enter a valid email address.');
            } else if (emailResult.hasScriptTag) {
                isValid = false;
                emailInput.setCustomValidity('Script tags are not allowed.');
            } else {
                emailInput.value = emailResult.sanitizedInput;
                emailInput.setCustomValidity('');
            }

            // Validate and sanitize subject input
            const subjectInput = document.getElementById('subject');
            let subjectResult = sanitizeAndCheckForScript(subjectInput.value.trim());
            if (subjectInput.value.trim() !== '') {
                if (subjectResult.hasScriptTag) {
                    isValid = false;
                    subjectInput.setCustomValidity('Script tags are not allowed.');
                } else {
                    subjectInput.value = subjectResult.sanitizedInput;
                    subjectInput.setCustomValidity('');
                }
            }

            // Validate and sanitize message input
            const messageInput = document.getElementById('message');
            let messageResult = sanitizeAndCheckForScript(messageInput.value.trim());
            if (messageInput.value.trim() !== '') {
                if (messageResult.hasScriptTag) {
                    isValid = false;
                    messageInput.setCustomValidity('Script tags are not allowed.');
                } else {
                    messageInput.value = messageResult.sanitizedInput;
                    messageInput.setCustomValidity('');
                }
            }

            // Display the custom validation message immediately
            if (!isValid) {
                event.preventDefault();
                event.stopPropagation();
                this.reportValidity(); // Forces the form to display validation messages
            } else {
                // If valid, submit the form
                event.preventDefault(); // Comment this line to allow actual form submission
                $.ajax({
                    type: "POST",
                    url: "<?php echo get_theme_file_uri("/sendEmail.php");?>",
                    data: {
                        name: nameInput.value,
                        email: emailInput.value,
                        subject: subjectInput.value,
                        message: messageInput.value
                    },
                    success: function(response) {
                        console.log(response);
                        document.getElementById('form-container').innerHTML = '<div class="alert alert-success">Thank you for your enquiry. We will get back to you soon.</div>';
                        // alert("Form submitted successfully!");
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }
        }, false);
</script>

<?php 
    get_footer();
?>