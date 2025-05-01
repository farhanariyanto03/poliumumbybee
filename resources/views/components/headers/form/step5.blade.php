<h5 class="section-title fw-bold mt-3">Pembayaran</h5>
<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label" for="metodebayar">Metode Pembayaran</label>
        <select class="form-select" id="metodebayar" name="metodebayar">
            <option value="">Pilih Metode</option>
            <option value="cash">Tunai</option>
            <option value="debit">Kartu Debit</option>
            <option value="credit">Kartu Kredit</option>
            <option value="qris">QRIS</option>
            <option value="va">Virtual Account</option>
        </select>
    </div>
    <div class="col-md-6">
        <label class="form-label" for="catatan">Catatan</label>
        <textarea id="catatan" name="catatan" rows="3" class="form-control"></textarea>
    </div>
</div>

<div class="mt-4 card p-3">
    <h6>Rincian Biaya</h6>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Layanan</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr><td colspan="2" class="text-center text-muted">Tidak ada rincian</td></tr>
            </tbody>
        </table>
    </div>
</div>

<div class="d-flex justify-content-between mt-3">
    <div>
        <strong>Total Bayar:</strong> Rp 0
    </div>
    <button class="btn btn-primary">Proses Pembayaran</button>
</div>