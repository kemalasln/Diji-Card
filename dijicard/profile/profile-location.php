<?php include_once '../pages/_dashboard.php'; ?>
<div class="row">

    <div class="card col-9 p-3">
        <div class="live-preview">
            <form action="javascript:void(0);" class="row g-3">
                <div class="col-10 mt-0">
                    <label for="inputAddress" class="form-label mt-3">Adres</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Sahabiye mah.">
                </div>
                <div class="col-10">
                    <label for="inputAddress2" class="form-label">Adres 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Adres detayı varsa yazınız">
                </div>
                <div class="col-md-3">
                    <label for="inputState" class="form-label">Ülke</label>
                    <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                        <option selected>Seçiniz</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="inputState" class="form-label">Şehir</label>
                    <select id="inputState" class="form-select" data-choices data-choices-sorting="true">
                        <option selected>Seçiniz</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="inputZip" class="form-label">Posta Kodu</label>
                    <input type="text" class="form-control" id="inputZip" placeholder="Posta Kodu">
                </div>
            </form>
        </div>

    </div>
    <div class="col-9">
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Kaydet</button>
        </div>
    </div>
</div>
<!-- End Page-content -->
<?php include_once '../pages/_footer.php'; ?>