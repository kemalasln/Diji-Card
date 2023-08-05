<?php include_once '../pages/_dashboard.php'; ?>
<!-- end page title -->
<div class="card col-8 p-4">
    <div class="row">
        <div class="col-6">
            <div class="form-floating mt-2 ">
                <input type="text" class="form-control" id="firstnamefloatingInput" placeholder="Enter your firstname">
                <label for="firstnamefloatingInput">Şirket İsmini Yazınız</label>
            </div>
        </div>
        <div class="col-6">
            <div class="form-floating mt-2 ">
                <input type="text" class="form-control" id="firstnamefloatingInput" placeholder="Enter your firstname">
                <label for="firstnamefloatingInput">Faaliyet Gösterdiğiniz Sektörü Yazınız</label>
            </div>
        </div>

        <div class="col-lg-7 my-4">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon3">https://</span>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Web site adresinizi yazınız">
            </div>
        </div>

        <div class="col-12">
            <label for="address" class="form-label">İş Yeri Adresi</label>
            <input type="text" class="form-control" id="address" placeholder="Sahabiye mah." required>
            <div class="invalid-feedback">Şirket adresinizi giriniz</div>
        </div>

        <div class="col-12 mt-3">
            <label for="address2" class="form-label">İş Yeri Adresi 2 <span class="text-muted">(Opsiyonel)</span></label>
            <input type="text" class="form-control mb-3" id="address2" placeholder="Adres detayı varsa yazınız" />
        </div>

        <div class="col-md-5">
            <label for="country" class="form-label">Ülke</label>
            <select class="form-select" id="country" required>
                <option value="">Seçiniz</option>
                <option>Türkiye</option>
            </select>
            <div class="invalid-feedback">Lütfen ülke seçiniz.</div>
        </div>

        <div class="col-md-4">
            <label for="state" class="form-label">Şehir</label>
            <select class="form-select" id="state">
                <option value="">Seçiniz...</option>
                <option>Kayseri</option>
            </select>
            <div class="invalid-feedback">Şehir seçiniz</div>
        </div>

        <div class="col-md-3">
            <label for="zip" class="form-label">Posta Kodu</label>
            <input type="text" class="form-control" id="zip" placeholder="" />
        </div>
    </div>

</div>


<div class="text m-3">
    <button type="submit" class="btn btn-primary">Kaydet</button>
</div>


<?php include_once '../pages/_footer.php'; ?>