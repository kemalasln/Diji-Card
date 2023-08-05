<?php include_once '../pages/_dashboard.php'; ?>
<div class="row">
    <div class="col-3">
        <div class="mb-3">
            <label for="firstNameinput" class="form-label">İsim</label>
            <input type="text" class="form-control" placeholder="İsminizi giriniz" id="firstNameinput">
        </div>
    </div><!--end col-->
    <div class="col-3">
        <div class="mb-3">
            <label for="lastNameinput" class="form-label">Soyisim</label>
            <input type="text" class="form-control" placeholder="Soyadınızı giriniz" id="lastNameinput">
        </div>
    </div><!--end col-->

    <div class="row mt-2">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Kendinizi açıklayacağınız kısa bir yazı yazınız.</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="snow-editor" style="height: 150px;">

                    </div> <!-- end Snow-editor-->
                </div><!-- end card-body -->
            </div><!-- end card -->

        </div>
        <!-- end col -->
    </div>
    <div class="text">
        <button type="submit" class="btn btn-primary mb-5">Kaydet</button>
    </div>
</div>
<?php include_once '../pages/_footer.php'; ?>