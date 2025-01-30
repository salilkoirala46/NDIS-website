<?php 
    get_header(); 
?>

 <div class="container-fluid bg-light">
            <div class="container pb-5 py-5">
                    <h2 class="pb-2 border-bottom text-primary">Make a Referral</h2>
                    <p class="lead"> 
                    <div class = "row">
                        <div class = "col-md-6 order-md-2 mb-4">
                            <img src="<?php echo get_theme_file_uri('img/referral.png');?>" class="d-block mx-lg-auto img-fluid" alt="Contact Us Image" width="600" height="600" loading="lazy">
                        </div>
                        <div class = "col-md-6 order-md-1">
                            <form class="needs-validation" novalidate="">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="ReferralName">Refferal name</label>
                                        <input type="text" class="form-control" id="YourName" placeholder="" value="" required="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="country">Referral Role</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected value="0">Parent</option>
                                        <option value="1">Other</option>
                                    </select>
                                </div>
                                <h2>Participant Info</h2>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="FirstName">First Name</label>
                                        <input type="text" class="form-control" id="FirstName" placeholder="" value="" required="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="LastName">Last Name</label>
                                        <input type="text" class="form-control" id="LastName" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="gender">Gender</label>
                                        <input type="text" class="form-control" id="gender" placeholder="" value="" required="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" class="form-control" id="dob" placeholder="">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="ndis1">NDIS#</label>
                                    <input type="text" class="form-control" id="ndis1" placeholder="">
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" placeholder="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="participant_email">Email</label>
                                        <input type="participant_email" class="form-control" id="participant_email" placeholder="">
                                    </div>
                                </div>
                                <div class="mb-3">
                                        <label for="diagnosis">Diagnosis</label>
                                        <input type="text" class="form-control" id="diagnosis" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="funding">Funding</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected value="plan_managed">Plan Managed</option>
                                        <option value="self_managed">Self Managed</option>
                                        <option value="ndia_managed">NDIA Managed</option>
                                    </select>
                                </div>
                                <div class = "mb-3">
                                    <label for="referral_reason">Referral Reason</label>
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
                                            <label for="message">Risks or hazards in the clients home we need to be aware of:</label>
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

<?php 
    get_footer();
?>