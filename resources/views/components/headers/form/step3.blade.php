<h5 class="section-title fw-bold mt-3">Diagnosis & Rencana</h5>
<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label" for="icd10">ICD 10</label>
        <div class="input-group">
            <input type="text" class="form-control" id="icd10Search" placeholder="Cari ICD 10">
            <button class="btn btn-outline-secondary" type="button"><i class="bi bi-search"></i></button>
        </div>
        <div class="table-responsive mt-2">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Kode ICD 10</th>
                        <th>Nama Diagnosa</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>H49.4</td>
                        <td>Progressive external ophthalmoplegia</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label" for="assesment">Assessment</label>
        <textarea id="assesment" name="assesment" rows="6" class="form-control"></textarea>
    </div>

    <div class="col-md-6">
        <label class="form-label" for="plan">Plan</label>
        <textarea id="plan" name="plan" rows="6" class="form-control"></textarea>
    </div>
</div>