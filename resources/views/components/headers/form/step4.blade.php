<h5 class="section-title fw-bold mt-3">Resep Obat</h5>
<div class="row g-3">
    <div class="col-md-4">
        <select name="obat" class="form-select" id="obatSelect">
            <option value="">Pilih Obat</option>
            <option value="paracetamol">Paracetamol</option>
            <option value="ibuprofen">Ibuprofen</option>
        </select>
    </div>
    <div class="col-md-2">
        <input type="number" class="form-control number-input" id="jumlahObat" name="jumlahObat" min="1" max="10" value="1">
    </div>
    <div class="col-md-2">
        <input type="text" class="form-control decimal-input" id="dosisObat" name="dosisObat" placeholder="mg/hari">
    </div>
    <div class="col-md-2">
        <button class="btn btn-success w-100" type="button">Tambah</button>
    </div>
</div>

<div class="table-responsive mt-3">
    <table class="table table-bordered table-striped align-middle">
        <thead>
            <tr>
                <th>Nama Obat</th>
                <th>Jumlah</th>
                <th>Dosis</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr><td colspan="5" class="text-center text-muted">Tidak ada obat dipilih</td></tr>
        </tbody>
    </table>
</div>