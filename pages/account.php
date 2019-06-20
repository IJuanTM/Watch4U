<hr class="content-row">
<h1>Account</h1>
<hr class="content-row">

<!-- Account form -->
<form class="account-form container-fluid" name="account-form" action="../script/account-script.php" method="POST">

    <div class="row">
        <div class="col-1 col-md-2 col-lg-3"></div>
        <div class="col-10 col-md-8 col-lg-6">

            <!-- Name row -->
            <div class="form-row">

                <div class="form-group col-5">
                    <label class="form-text" for="inputFirstname">Firstname:</label>
                    <input type="text" class="form-control" id="inputFirstname" placeholder="Firstname" disabled>
                </div>

                <div class="form-group col-2">
                    <label class="form-text" for="inputInfix">Infix:</label>
                    <input type="text" class="form-control" id="inputInfix" placeholder="Infix" disabled>
                </div>

                <div class="form-group col-5">
                    <label class="form-text" for="inputLastname">Lastname:</label>
                    <input type="text" class="form-control" id="inputLastname" placeholder="Lastname" disabled>
                </div>

            </div>

            <!-- Email row -->
            <div class="form-row">

                <div class="form-group col-12">
                    <label class="form-text" for="inputEmail">Email:</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" disabled>
                </div>

            </div>

            <!-- Password row -->
            <div class="form-row">

                <div class="form-group col-12">
                    <label class="form-text" for="inputPassword">Password:</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" disabled>
                </div>

            </div>

            <!-- Street row -->
            <div class="form-row">

                <div class="form-group col-12">
                    <label class="form-text" for="inputEmail">Street + Number:</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Street + Number" disabled>
                </div>

            </div>

            <!-- Postalcode row -->
            <div class="form-row">

                <div class="form-group col-4">
                    <label class="form-text" for="inputPostalcode">Postalcode:</label>
                    <input type="text" class="form-control" id="inputPostalCode" placeholder="Postalcode" disabled>
                </div>

                <div class="form-group col-8">
                    <label class="form-text" for="inputCity">City:</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="City" disabled>
                </div>

            </div>

            <!-- Phone row -->
            <div class="form-row">

                <div class="form-group col-12">
                    <label class="form-text" for="inputPhone">Phone:</label>
                    <input type="tel" class="form-control" id="inputPhone" placeholder="Phone" disabled>
                </div>

            </div>

            <!-- Button row -->
            <div class="form-row">

                <div class="form-group col-3"></div>
                <div class="form-group col-6">
                    <button type="submit" class="btn form-btn">Edit</button>
                </div>
                <div class="form-group col-3"></div>

            </div>

        </div>
        <div class="col-1 col-md-2 col-lg-3"></div>
    </div>

</form>