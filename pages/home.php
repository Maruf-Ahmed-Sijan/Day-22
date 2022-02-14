<?php include 'pages/include/header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-capitalize text-center text-success">calculator</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-4">First Number</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="first_number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-4">Last Number</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="last_number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-4">Option </label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="option" value="+">add</label>
                                    <label for=""><input type="radio" name="option" value="-">sub</label>
                                    <label for=""><input type="radio" name="option" value="*">multiply</label>
                                    <label for=""><input type="radio" name="option" value="/">div</label>
                                    <label for=""><input type="radio" name="option" value="%">mod</label>
                                </div>
                            </div>
                            <div class="from-group row">
                                <label for="" class="col-form-label col-md-4">Result</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" value="<?php echo isset($result)? $result:''?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row py-3">
                                <label for="" class="col-form-label col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="btn" class="form-control btn btn-outline-warning btn-block" >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include 'pages/include/footer.php'; ?>