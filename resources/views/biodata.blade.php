<x-layouts.homepage title="Biodata Sekolah">

    <style>
        .bio-section {
            padding: 60px 0;
        }

        .bio-title {
            font-size: 3rem;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 50px;
            text-align: center;
        }

        .bio-item {
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 2px solid #e2e8f0;
        }

        .bio-item:last-child {
            border-bottom: none;
        }

        .bio-label {
            font-size: 0.9rem;
            font-weight: 600;
            color: #2563eb;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        .bio-value {
            font-size: 1.3rem;
            font-weight: 600;
            color: #1e293b;
            line-height: 1.6;
        }

        body.dark-mode .bio-title {
            color: #e2e8f0;
        }

        body.dark-mode .bio-item {
            border-bottom-color: #334155;
        }

        body.dark-mode .bio-value {
            color: #cbd5e1;
        }
    </style>

    <div class="container bio-section">
        <h1 class="bio-title">Biodata Sekolah</h1>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                
                <div class="bio-item">
                    <div class="bio-label">Nama Sekolah</div>
                    <div class="bio-value">SMA Negeri 28 Jakarta</div>
                </div>

                <div class="bio-item">
                    <div class="bio-label">Alamat Lengkap</div>
                    <div class="bio-value">Jl. Raya Ragunan No.33, RT.5/RW.7, Jati Padang, Ps. Minggu, Jakarta Selatan 12540</div>
                </div>

                <div class="bio-item">
                    <div class="bio-label">Akreditasi</div>
                    <div class="bio-value">A (Unggul)</div>
                </div>

                <div class="bio-item">
                    <div class="bio-label">Kepala Sekolah</div>
                    <div class="bio-value">Drs. H. Sugeng Riyadi, M.Pd.</div>
                </div>

                <div class="bio-item">
                    <div class="bio-label">Status Sekolah</div>
                    <div class="bio-value">Sekolah Plus Standar Nasional</div>
                </div>

                <div class="bio-item">
                    <div class="bio-label">Kurikulum</div>
                    <div class="bio-value">Kurikulum Sekolah Penggerak</div>
                </div>

                <div class="bio-item">
                    <div class="bio-label">Telepon</div>
                    <div class="bio-value">(021) 7806293</div>
                </div>

                <div class="bio-item">
                    <div class="bio-label">Email</div>
                    <div class="bio-value">mail28jkt@gmail.com</div>
                </div>

                <div class="bio-item">
                    <div class="bio-label">Website</div>
                    <div class="bio-value"><a href="https://sman28jkt.sch.id/" target="_blank" style="color: #2563eb; text-decoration: none;">sman28jkt.sch.id</a></div>
                </div>

            </div>
        </div>
    </div>

</x-layouts.homepage>
