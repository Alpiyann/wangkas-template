@php
$title = 'Kurikulum - SMAN 28 Jakarta';
@endphp

<x-layouts.homepage :title="$title">
    <style>
        .section-header {
            padding: 60px 0 40px;
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            color: white;
            margin-bottom: 50px;
        }

        .section-header h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .section-header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* Tab Navigation */
        .tab-nav {
            display: flex;
            gap: 10px;
            margin-bottom: 30px;
            flex-wrap: wrap;
            border-bottom: 2px solid #e2e8f0;
        }

        .tab-btn {
            background: transparent;
            border: none;
            padding: 15px 25px;
            font-weight: 600;
            color: #666;
            cursor: pointer;
            border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
            position: relative;
            bottom: -2px;
        }

        .tab-btn:hover {
            color: #2563eb;
        }

        .tab-btn.active {
            color: #2563eb;
            border-bottom-color: #2563eb;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Two Column Layout */
        .two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin: 30px 0;
        }

        .content-box {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .content-box h3 {
            color: #1a1a1a;
            font-weight: 700;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 3px solid #2563eb;
        }

        .content-box ul {
            list-style: none;
            padding: 0;
        }

        .content-box li {
            padding: 10px 0;
            padding-left: 30px;
            position: relative;
            color: #555;
            line-height: 1.6;
        }

        .content-box li::before {
            content: '→';
            position: absolute;
            left: 0;
            color: #2563eb;
            font-weight: bold;
        }

        /* Comparison Table Style */
        .comparison-table {
            width: 100%;
            border-collapse: collapse;
            margin: 30px 0;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .comparison-table thead {
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            color: white;
        }

        .comparison-table th {
            padding: 20px;
            text-align: left;
            font-weight: 700;
        }

        .comparison-table td {
            padding: 15px 20px;
            border-bottom: 1px solid #e2e8f0;
        }

        .comparison-table tbody tr:hover {
            background: #f8fafc;
        }

        /* Feature List dengan Icon */
        .feature-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }

        .feature-item {
            background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #2563eb;
            text-align: center;
        }

        .feature-item-icon {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .feature-item h5 {
            color: #1e40af;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .feature-item p {
            color: #666;
            font-size: 0.9rem;
            margin: 0;
        }

        /* Text Box dengan Background */
        .text-box {
            background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
            padding: 30px;
            border-radius: 12px;
            border-left: 5px solid #2563eb;
            margin: 30px 0;
        }

        .text-box h4 {
            color: #047857;
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        .text-box p {
            color: #1a1a1a;
            line-height: 1.8;
            margin: 0;
        }

        /* Infographic Stats */
        .stats-infographic {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }

        .stat-item {
            text-align: center;
            padding: 25px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: #2563eb;
            margin-bottom: 10px;
        }

        .stat-label {
            color: #666;
            font-size: 0.95rem;
            font-weight: 600;
        }

        .dark-mode .content-box,
        .dark-mode .comparison-table,
        .dark-mode .stat-item {
            background: #1e293b;
        }

        .dark-mode .content-box h3 {
            color: #e2e8f0;
            border-bottom-color: #60a5fa;
        }

        .dark-mode .content-box li {
            color: #cbd5e1;
        }

        .dark-mode .content-box li::before {
            color: #60a5fa;
        }

        .dark-mode .comparison-table thead {
            background: linear-gradient(135deg, #60a5fa 0%, #2563eb 100%);
        }

        .dark-mode .comparison-table td {
            border-bottom-color: #334155;
            color: #cbd5e1;
        }

        .dark-mode .comparison-table tbody tr:hover {
            background: #0f172a;
        }

        .dark-mode .text-box {
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.1) 0%, rgba(30, 64, 175, 0.1) 100%);
        }

        .dark-mode .text-box h4 {
            color: #60a5fa;
        }

        .dark-mode .text-box p {
            color: #cbd5e1;
        }

        .dark-mode .stat-number {
            color: #60a5fa;
        }

        .dark-mode .stat-label {
            color: #cbd5e1;
        }

        .dark-mode .feature-item {
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.1) 0%, rgba(30, 64, 175, 0.1) 100%);
            border-left-color: #60a5fa;
        }

        .dark-mode .feature-item h5 {
            color: #60a5fa;
        }

        @media (max-width: 768px) {
            .two-col {
                grid-template-columns: 1fr;
            }

            .tab-nav {
                flex-direction: column;
            }

            .tab-btn {
                border-bottom: 3px solid #e2e8f0;
                bottom: 0;
            }

            .tab-btn.active {
                border-bottom-color: #2563eb;
                border-left: 3px solid #2563eb;
            }
        }
    </style>

    <div class="section-header">
        <div class="container">
            <h1>Kurikulum</h1>
            <p>Program Kurikulum Merdeka yang Relevan, Inovatif, dan Berdampak Positif</p>
        </div>
    </div>

    <div class="container py-5">
        <!-- Pengantar -->
        <section class="mb-5">
            <h2 class="mb-4" style="color: #1a1a1a; font-weight: 700;">📚 Filosofi Kurikulum Kami</h2>
            <div class="text-box">
                <p>SMAN 28 Jakarta menerapkan Kurikulum Merdeka yang dirancang untuk mengembangkan potensi siswa secara optimal. 
                Kurikulum kami fokus pada pengembangan kompetensi inti, keterampilan abad ke-21, dan pembentukan karakter yang 
                selaras dengan nilai-nilai sekolah. Kami memberikan kebebasan kepada siswa untuk memilih program dan mata pelajaran 
                sesuai dengan minat, bakat, dan rencana karir mereka.</p>
            </div>
        </section>

        <!-- Statistik -->
        <section class="mb-5">
            <h2 class="mb-4" style="color: #1a1a1a; font-weight: 700;">📊 Data Kurikulum SMAN 28</h2>
            <div class="stats-infographic">
                <div class="stat-item">
                    <div class="stat-number">45+</div>
                    <div class="stat-label">Mata Pelajaran</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">120+</div>
                    <div class="stat-label">Jam/Minggu</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">4</div>
                    <div class="stat-label">Program</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">95%</div>
                    <div class="stat-label">Lulusan Kuliah</div>
                </div>
            </div>
        </section>

        <!-- Tab Navigation -->
        <section class="mb-5">
            <h2 class="mb-4" style="color: #1a1a1a; font-weight: 700;">🎯 Program Unggulan & Peminatan</h2>
            
            <div class="tab-nav">
                <button class="tab-btn active" onclick="showTab(event, 'ipa')">Program IPA</button>
                <button class="tab-btn" onclick="showTab(event, 'ips')">Program IPS</button>
                <button class="tab-btn" onclick="showTab(event, 'bahasa')">Program Bahasa</button>
                <button class="tab-btn" onclick="showTab(event, 'unggulan')">Kelas Unggulan</button>
            </div>

            <div id="ipa" class="tab-content active">
                <div class="two-col">
                    <div class="content-box">
                        <h3>📐 Fokus Pembelajaran</h3>
                        <ul>
                            <li>Matematika Tingkat Lanjut</li>
                            <li>Fisika & Eksperimen</li>
                            <li>Kimia Analitik</li>
                            <li>Biologi Modern</li>
                            <li>STEM Integration</li>
                        </ul>
                    </div>
                    <div class="content-box">
                        <h3>🎓 Peminatan</h3>
                        <ul>
                            <li>Matematika - Fisika (Eksak Murni)</li>
                            <li>Biologi - Kimia (IPA Kesehatan)</li>
                            <li>Integrasi STEM</li>
                            <li>Environmental Science</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="ips" class="tab-content">
                <div class="two-col">
                    <div class="content-box">
                        <h3>🌍 Fokus Pembelajaran</h3>
                        <ul>
                            <li>Ekonomi & Bisnis</li>
                            <li>Sejarah & Peradaban</li>
                            <li>Geografi & Lingkungan</li>
                            <li>Sosiologi Kontekstual</li>
                            <li>Hukum & Kewarganegaraan</li>
                        </ul>
                    </div>
                    <div class="content-box">
                        <h3>🎓 Peminatan</h3>
                        <ul>
                            <li>Ekonomi & Akuntansi</li>
                            <li>Sejarah & Budaya</li>
                            <li>Geografi & Lingkungan Berkelanjutan</li>
                            <li>Studi Pembangunan</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="bahasa" class="tab-content">
                <div class="two-col">
                    <div class="content-box">
                        <h3>🗣️ Fokus Pembelajaran</h3>
                        <ul>
                            <li>Bahasa Indonesia Lanjut</li>
                            <li>English Proficiency</li>
                            <li>Bahasa Mandarin/Jepang</li>
                            <li>Sastra & Literasi</li>
                            <li>Komunikasi Global</li>
                        </ul>
                    </div>
                    <div class="content-box">
                        <h3>🎓 Peminatan</h3>
                        <ul>
                            <li>English for International</li>
                            <li>Language & Culture Studies</li>
                            <li>Mandarin Proficiency</li>
                            <li>Media & Jurnalistik</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="unggulan" class="tab-content">
                <div class="two-col">
                    <div class="content-box">
                        <h3>⭐ Keunggulan Program</h3>
                        <ul>
                            <li>Seleksi input akademik ketat</li>
                            <li>Pembelajaran dengan mentor khusus</li>
                            <li>Fasilitas lab premium</li>
                            <li>Program enrichment intensif</li>
                            <li>Persiapan PTN terpadu</li>
                        </ul>
                    </div>
                    <div class="content-box">
                        <h3>🏆 Pencapaian</h3>
                        <ul>
                            <li>90%+ masuk PTN top</li>
                            <li>Juara olimpiade nasional</li>
                            <li>Prestasi akademik terbaik</li>
                            <li>Beasiswa penuh internasional</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Feature List -->
        <section class="mb-5">
            <h2 class="mb-4" style="color: #1a1a1a; font-weight: 700;">💡 Metode Pembelajaran Inovatif</h2>
            <div class="feature-list">
                <div class="feature-item">
                    <div class="feature-item-icon">🎯</div>
                    <h5>Project-Based Learning</h5>
                    <p>Pembelajaran berbasis proyek nyata untuk mengembangkan problem solving</p>
                </div>
                <div class="feature-item">
                    <div class="feature-item-icon">🔬</div>
                    <h5>Discovery Learning</h5>
                    <p>Siswa menemukan pengetahuan melalui eksperimen & investigasi</p>
                </div>
                <div class="feature-item">
                    <div class="feature-item-icon">👥</div>
                    <h5>Collaborative Learning</h5>
                    <p>Kerja kelompok untuk membangun soft skills & teamwork</p>
                </div>
                <div class="feature-item">
                    <div class="feature-item-icon">💻</div>
                    <h5>Digital Learning</h5>
                    <p>Pembelajaran hybrid dengan teknologi terkini & LMS</p>
                </div>
                <div class="feature-item">
                    <div class="feature-item-icon">🌍</div>
                    <h5>Contextual Learning</h5>
                    <p>Materi terhubung dengan kehidupan nyata & global issues</p>
                </div>
                <div class="feature-item">
                    <div class="feature-item-icon">📈</div>
                    <h5>Mastery Learning</h5>
                    <p>Sistem pembelajaran yang memastikan penguasaan materi setiap siswa</p>
                </div>
            </div>
        </section>

        <!-- Fasilitas Pembelajaran -->
        <section class="mb-5">
            <h2 class="mb-4" style="color: #1a1a1a; font-weight: 700;">🏢 Fasilitas & Infrastruktur Premium</h2>
            <div class="comparison-table">
                <thead>
                    <tr>
                        <th>Fasilitas</th>
                        <th>Spesifikasi</th>
                        <th>Keunggulan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Lab Sains</strong></td>
                        <td>Fisika, Kimia, Biologi</td>
                        <td>Peralatan modern & up-to-date</td>
                    </tr>
                    <tr>
                        <td><strong>Lab Komputer</strong></td>
                        <td>40+ Unit PC, Software Premium</td>
                        <td>Coding, Web Dev, 3D Design</td>
                    </tr>
                    <tr>
                        <td><strong>Lab Robotika</strong></td>
                        <td>Robot Kit, IoT, Microcontroller</td>
                        <td>Robotics competition ready</td>
                    </tr>
                    <tr>
                        <td><strong>Smart Classroom</strong></td>
                        <td>Interactive Board, Projector 4K</td>
                        <td>Pengalaman belajar immersive</td>
                    </tr>
                    <tr>
                        <td><strong>Library Digital</strong></td>
                        <td>10,000+ E-books, Jurnal</td>
                        <td>Akses 24/7 research materials</td>
                    </tr>
                    <tr>
                        <td><strong>WiFi 6 Network</strong></td>
                        <td>Coverage 100%, 1 Gbps</td>
                        <td>Learning tanpa lag seamless</td>
                    </tr>
                </tbody>
            </div>
        </section>

        <!-- Penilaian & Evaluasi -->
        <section class="mb-5">
            <h2 class="mb-4" style="color: #1a1a1a; font-weight: 700;">📋 Sistem Penilaian Komprehensif</h2>
            <div class="two-col">
                <div class="text-box">
                    <h4>✅ Penilaian Formatif</h4>
                    <p>Penilaian berkelanjutan untuk mengukur proses pembelajaran siswa setiap hari melalui quiz, diskusi, dan aktivitas kelas.</p>
                </div>
                <div class="text-box">
                    <h4>🎯 Penilaian Sumatif</h4>
                    <p>Penilaian akhir untuk mengukur hasil pembelajaran melalui tes, proyek, dan presentasi di akhir unit.</p>
                </div>
                <div class="text-box">
                    <h4>📊 Asesmen Portofolio</h4>
                    <p>Pengumpulan karya siswa untuk evaluasi perkembangan jangka panjang dan refleksi belajar.</p>
                </div>
                <div class="text-box">
                    <h4>🏆 Penilaian Kompetensi</h4>
                    <p>Evaluasi kompetensi key skills melalui analitik untuk pengembangan holistik siswa.</p>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="mb-5">
            <div class="content-box" style="background: linear-gradient(135deg, #059669 0%, #047857 100%); color: white; border: none;">
                <h3 style="color: white; border-bottom-color: white;">Ingin Tahu Lebih Lanjut tentang Kurikulum Kami?</h3>
                <p style="color: white; line-height: 1.8; margin: 20px 0 0 0;">
                    Hubungi Wakil Kepala Sekolah Bidang Kurikulum untuk konsultasi lebih lanjut tentang program dan peminatan yang tersedia.
                </p>
                <ul style="color: white; margin-top: 15px;">
                    <li>Email: kurikulum@sman28jkt.sch.id</li>
                    <li>Telepon: (021) 7806293 ext. 101</li>
                </ul>
            </div>
        </section>
    </div>

    <script>
        function showTab(evt, tabName) {
            const tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach(tab => tab.classList.remove('active'));
            
            const tabBtns = document.querySelectorAll('.tab-btn');
            tabBtns.forEach(btn => btn.classList.remove('active'));
            
            document.getElementById(tabName).classList.add('active');
            evt.currentTarget.classList.add('active');
        }
    </script>
</x-layouts.homepage>
