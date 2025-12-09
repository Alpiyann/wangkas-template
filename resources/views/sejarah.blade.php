<x-layouts.homepage title="Sejarah Sekolah">

    <style>
        .sejarah-section {
            padding: 60px 0;
        }

        .sejarah-title {
            font-size: 3rem;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 30px;
        }

        .sejarah-text {
            font-size: 1.15rem;
            line-height: 1.9;
            color: #334155;
            margin-bottom: 25px;
        }

        .visi-misi-section {
            margin-top: 60px;
        }

        .vm-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: #2563eb;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid #2563eb;
        }

        .vm-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #334155;
        }

        .misi-list {
            list-style: none;
            padding: 0;
        }

        .misi-list li {
            font-size: 1.05rem;
            line-height: 1.8;
            color: #334155;
            margin-bottom: 15px;
            padding-left: 30px;
            position: relative;
        }

        .misi-list li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #2563eb;
            font-weight: bold;
            font-size: 1.3rem;
        }

        body.dark-mode .sejarah-title,
        body.dark-mode .vm-title {
            color: #e2e8f0;
        }

        body.dark-mode .vm-title {
            color: #60a5fa;
            border-bottom-color: #60a5fa;
        }

        body.dark-mode .sejarah-text,
        body.dark-mode .vm-text,
        body.dark-mode .misi-list li {
            color: #cbd5e1;
        }
    </style>

    <div class="container sejarah-section">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h1 class="sejarah-title">Sejarah SMA Negeri 28 Jakarta</h1>

                <p class="sejarah-text">
                    Berdasarkan Surat Keputusan Menteri Pendidikan dan Kebudayaan Republik Indonesia No. 343/UKK.3/1970 
                    tertanggal 5 Maret 1970, pada tanggal <strong>1 Januari 1970</strong> SMA 11 Filial resmi menjadi 
                    <strong>SMA Negeri 28 Jakarta</strong>. Sekolah ini berlokasi di Pasar Minggu, Jakarta Selatan 
                    dan telah menjadi salah satu institusi pendidikan terkemuka di wilayah tersebut.
                </p>

                <p class="sejarah-text">
                    Sejak tahun pelajaran 2004/2005, <strong>SMA Negeri 28 Jakarta ditetapkan sebagai Sekolah Plus Standar Nasional</strong>.
                    Kini sekolah ini telah berkembang menjadi institusi pendidikan yang menerapkan <strong>Kurikulum Sekolah Penggerak</strong>,
                    dengan misi mewujudkan lulusan yang unggul berdasarkan IMTAK dan IPTEK dalam persaingan global,
                    serta mengusung motto: <strong>TAQWA, CERDAS, SANTUN, PRESTASI</strong>.
                </p>

                <div class="visi-misi-section">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <h2 class="vm-title">Visi SMAN 28 Jakarta</h2>
                            <p class="vm-text">
                                Mewujudkan lulusan yang unggul berdasarkan <strong>IMTAK</strong> (Iman dan Takwa) 
                                dan <strong>IPTEK</strong> (Ilmu Pengetahuan dan Teknologi) dalam persaingan global, 
                                dengan menjunjung tinggi nilai-nilai <strong>Taqwa, Cerdas, Santun, dan Prestasi</strong>.
                            </p>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <h2 class="vm-title">Misi SMAN 28 Jakarta</h2>
                            <ul class="misi-list">
                                <li>Menanamkan nilai-nilai ketaqwaan dan budi pekerti luhur kepada peserta didik.</li>
                                <li>Mengembangkan kecerdasan akademik dan keterampilan peserta didik.</li>
                                <li>Membentuk karakter santun dalam berinteraksi dan berkomunikasi.</li>
                                <li>Mendorong prestasi akademik dan non-akademik di tingkat nasional maupun internasional.</li>
                                <li>Menerapkan pembelajaran berbasis teknologi dan inovasi.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-layouts.homepage>
