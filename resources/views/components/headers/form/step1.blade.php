<h5 class="section-title fw-bold mt-3">Identitas Pasien</h5>
<div class="row g-3">
    <!-- Cari Pasien -->
    <div class="col-md-12">
        <label for="searchNoRM" class="form-label">Cari Data Pasien</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-search"></i></span>
            <input list="noRMList" id="searchNoRM" class="form-control" placeholder="Cari berdasarkan No RM / Nama">
            <datalist id="noRMList">
                <option value="RM001 - Budi">
                <option value="RM002 - Siti">
                <option value="RM003 - Agus">
            </datalist>
        </div>
    </div>

    <!-- No RM -->
    <div class="col-md-4">
        <label class="form-label" for="norm">Nomor Rekam Medis <span class="text-danger">*</span></label>
        <input type="text" class="form-control required" id="norm" name="norm" placeholder="Contoh: RM123456">
    </div>

    <!-- Nama -->
    <div class="col-md-8">
        <label class="form-label" for="nama">Nama Lengkap<span class="text-danger">*</span></label>
        <input type="text" class="form-control required" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
    </div>

    <!-- NIK -->
    <div class="col-md-6">
        <label class="form-label" for="nik">NIK (KTP) <span class="text-danger">*</span></label>
        <input type="text" class="form-control required number-input" id="nik" name="nik" placeholder="16 digit" maxlength="16">
        <small class="error-message d-none">NIK harus 16 digit.</small>
    </div>

    <!-- Tempat Lahir -->
    <div class="col-md-6">
        <label class="form-label" for="tempatlahir">Tempat Lahir <span class="text-danger">*</span></label>
        <input type="text" class="form-control required" id="tempatlahir" name="tempatlahir">
    </div>

    <!-- Tanggal Lahir -->
    <div class="col-md-4">
        <label class="form-label" for="tanggallahir">Tanggal Lahir <span class="text-danger">*</span></label>
        <input type="date" class="form-control required" id="tanggallahir" name="tanggallahir">
    </div>

    <!-- Jenis Kelamin -->
    <div class="col-md-4">
        <label class="form-label" for="jeniskelamin">Jenis Kelamin <span class="text-danger">*</span></label>
        <select class="form-select required" id="jeniskelamin" name="jeniskelamin">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
        </select>
    </div>

    <!-- Agama -->
    <div class="col-md-4">
        <label class="form-label" for="agama">Agama <span class="text-danger">*</span></label>
        <select class="form-select required" id="agama" name="agama">
            <option value="">Pilih Agama</option>
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="hindu">Hindu</option>
            <option value="buddha">Buddha</option>
        </select>
    </div>

    <!-- Alamat -->
    <div class="col-md-12">
        <label class="form-label" for="alamatlengkap">Alamat Lengkap <span class="text-danger">*</span></label>
        <input type="text" class="form-control required" id="alamatlengkap" name="alamatlengkap" placeholder="Jalan, RT/RW, Kelurahan, Kecamatan, dll.">
    </div>

    <!-- Kota / Provinsi -->
    <div class="col-md-6">
        <label class="form-label" for="provinsi">Provinsi</label>
        <input type="text" class="form-control" id="provinsi" name="provinsi">
    </div>
    <div class="col-md-6">
        <label class="form-label" for="kota">Kota/Kabupaten</label>
        <input type="text" class="form-control" id="kota" name="kota">
    </div>

    <!-- Status Perkawinan -->
    <div class="col-md-4">
        <label class="form-label" for="status_perkawinan">Status Perkawinan</label>
        <select class="form-select" id="status_perkawinan" name="status_perkawinan">
            <option value="">Pilih Status</option>
            <option value="belum_kawin">Belum Kawin</option>
            <option value="kawin">Kawin</option>
        </select>
    </div>

    <!-- Pekerjaan -->
    <div class="col-md-4">
        <label class="form-label" for="pekerjaan">Pekerjaan</label>
        <select class="form-select" id="pekerjaan" name="pekerjaan">
            <option value="">Pilih Pekerjaan</option>
            <option value="pns">PNS</option>
            <option value="swasta">Swasta</option>
        </select>
    </div>

    <!-- No Telepon -->
    <div class="col-md-4">
        <label class="form-label" for="telepon">Nomor Telepon</label>
        <input type="text" class="form-control number-input" id="telepon" name="telepon" placeholder="08xxxxxx" maxlength="13">
    </div>
</div>