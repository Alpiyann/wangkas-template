@php
$title = 'Kesiswaan - SMAN 28 Jakarta';
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

        /* Info Box dengan Icon */
        .info-box {
            background: white;
            border-radius: 15px;
            padding: 40px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .info-box.alt {
            flex-direction: row-reverse;
        }

        .info-box-icon {
            font-size: 4rem;
            min-width: 100px;
            text-align: center;
        }

        .info-box-content h3 {
            color: #1a1a1a;
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        .info-box-content p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        .info-box-content ul {
            list-style: none;
            padding: 0;
        }

        .info-box-content li {
            padding: 8px 0;
            padding-left: 25px;
            position: relative;
            color: #555;
        }

        .info-box-content li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #2563eb;
            font-weight: bold;
            font-size: 1.2rem;
        }

        /* Grid Highlight */
        .highlight-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 40px 0;
        }

        .highlight-item {
            background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
            padding: 25px;
            border-radius: 12px;
            border-left: 5px solid #2563eb;
            text-align: center;
        }

        .highlight-item-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .highlight-item h4 {
            color: #1e40af;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .highlight-item p {
            color: #1a1a1a;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Timeline */
        .timeline-kegiatan {
            position: relative;
            padding: 40px 0;
        }

        .timeline-kegiatan::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 100%;
            background: linear-gradient(180deg, #2563eb 0%, #dbeafe 100%);
            top: 0;
        }

        .timeline-item-wrapper {
            margin-bottom: 40px;
            position: relative;
        }

        .timeline-item-wrapper:nth-child(odd) {
            margin-left: 0;
            margin-right: 51%;
            text-align: right;
        }

        .timeline-item-wrapper:nth-child(even) {
            margin-left: 51%;
            margin-right: 0;
            text-align: left;
        }

        .timeline-marker {
            display: none;
        }

        .timeline-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .timeline-content h4 {
            color: #1a1a1a;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .timeline-content p {
            color: #666;
            font-size: 0.95rem;
            margin: 0;
        }

        /* Accordion */
        .accordion-item-custom {
            background: white;
            border: 1px solid #e2e8f0;
            margin-bottom: 15px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .accordion-item-custom:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .accordion-btn-custom {
            background: white;
            border: none;
            padding: 20px;
            width: 100%;
            text-align: left;
            font-weight: 600;
            color: #1a1a1a;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.05rem;
            transition: all 0.3s ease;
        }

        .accordion-btn-custom:hover {
            background: #f8fafc;
            color: #2563eb;
        }

        .accordion-btn-custom.active {
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            color: white;
        }

        .accordion-icon {
            font-size: 1.3rem;
            transition: transform 0.3s ease;
        }

        .accordion-btn-custom.active .accordion-icon {
            transform: rotate(180deg);
        }

        .accordion-content-custom {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            padding: 0 20px;
        }

        .accordion-content-custom.active {
            max-height: 500px;
            padding: 0 20px 20px 20px;
        }

        .accordion-content-custom p {
            color: #666;
            line-height: 1.8;
            margin: 0;
        }

        /* Feature Cards */
        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #2563eb 0%, #1e40af 100%);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .feature-card h4 {
            color: #1a1a1a;
            font-weight: 700;
            margin-bottom: 12px;
            font-size: 1.2rem;
        }

        .feature-card p {
            color: #666;
            line-height: 1.7;
            margin: 0;
        }

        .dark-mode .info-box,
        .dark-mode .feature-card,
        .dark-mode .accordion-item-custom,
        .dark-mode .timeline-content,
        .dark-mode .highlight-item {
            background: #1e293b;
            color: #e2e8f0;
        }

        .dark-mode .info-box-content h3,
        .dark-mode .feature-card h4,
        .dark-mode .timeline-content h4,
        .dark-mode .accordion-btn-custom {
            color: #e2e8f0;
        }

        .dark-mode .info-box-content p,
        .dark-mode .info-box-content li,
        .dark-mode .feature-card p,
        .dark-mode .timeline-content p {
            color: #cbd5e1;
        }

        .dark-mode .highlight-item {
            background: linear-gradient(135deg, rgba(96, 165, 250, 0.1) 0%, rgba(59, 130, 246, 0.1) 100%);
            border-left-color: #60a5fa;
        }

        .dark-mode .highlight-item h4 {
            color: #60a5fa;
        }

        .dark-mode .accordion-btn-custom:hover {
            background: #0f172a;
            color: #60a5fa;
        }

        .dark-mode .accordion-item-custom {
            border-color: #334155;
        }

        @media (max-width: 768px) {
            .info-box {
                flex-direction: column !important;
                padding: 25px;
            }

            .info-box-icon {
                font-size: 2.5rem;
            }

            .timeline-kegiatan::before {
                left: 20px;
            }

            .timeline-item-wrapper:nth-child(odd),
            .timeline-item-wrapper:nth-child(even) {
                margin-left: 0;
                margin-right: 0;
                margin-left: 60px;
                text-align: left !important;
            }

            .timeline-marker {
                left: 20px;
            }
        }
    </style>

    <div class="section-header">
        <div class="container">
            <h1>Bidang Kesiswaan</h1>
            <p>Membina Karakter, Mengembangkan Potensi, dan Membentuk Generasi Unggul</p>
        </div>
    </div>

    <div class="container py-5">
        <!-- Section 1: Pengantar dengan Icon -->
        <section class="mb-5">
            <div class="info-box">
                <div class="info-box-icon">👥</div>
                <div class="info-box-content">
                    <h3>Visi Bidang Kesiswaan</h3>
                    <p>Bidang Kesiswaan SMAN 28 Jakarta berkomitmen untuk membina siswa yang berkarakter mulia, disiplin, 
                    mandiri, dan memiliki rasa tanggung jawab tinggi. Kami percaya bahwa pengembangan karakter dan potensi 
                    siswa adalah kunci kesuksesan akademik maupun kehidupan mereka di masa depan.</p>
                </div>
            </div>
        </section>

        <!-- Section 2: Statistik Highlight Grid -->
        <section class="mb-5">
            <h2 class="mb-4" style="color: #1a1a1a; font-weight: 700;">Potret Kesiswaan SMAN 28</h2>
            <div class="highlight-grid">
                <div class="highlight-item">
                    <div class="highlight-item-icon">👨‍🎓</div>
                    <h4>1,200+</h4>
                    <p>Siswa Aktif dari berbagai latar belakang</p>
                </div>
                <div class="highlight-item">
                    <div class="highlight-item-icon">🎯</div>
                    <h4>35+</h4>
                    <p>Organisasi Siswa Intra & Ekstrakurikuler</p>
                </div>
                <div class="highlight-item">
                    <div class="highlight-item-icon">🏆</div>
                    <h4>100+</h4>
                    <p>Penghargaan Diperoleh Per Tahun</p>
                </div>
            </div>
        </section>

        <!-- Section 3: Program Utama dengan Card Layout -->
        <section class="mb-5">
            <h2 class="mb-4" style="color: #1a1a1a; font-weight: 700;">Program Unggulan Kesiswaan</h2>
            
            <div class="info-box">
                <div class="info-box-icon">🎓</div>
                <div class="info-box-content">
                    <h3>Orientasi Siswa Baru (OSISN)</h3>
                    <p>Program komprehensif untuk membantu siswa baru beradaptasi dengan lingkungan sekolah yang dinamis.</p>
                    <ul>
                        <li>Pengenalan budaya sekolah dan nilai-nilai yang dianut</li>
                        <li>Workshop kepemimpinan dan soft skills</li>
                        <li>Bonding dan team building dengan teman dan guru</li>
                        <li>Outbound experience di alam terbuka</li>
                    </ul>
                </div>
            </div>

            <div class="info-box alt">
                <div class="info-box-icon">⭐</div>
                <div class="info-box-content">
                    <h3>Pengembangan Organisasi & Kepemimpinan</h3>
                    <p>Kami memfasilitasi pengembangan kepemimpinan melalui berbagai organisasi yang dinamis dan terstruktur.</p>
                    <ul>
                        <li>OSIS dengan struktur organisasi modern dan responsive</li>
                        <li>Dewan Ambalan Pramuka dengan program nasional</li>
                        <li>Organisasi keagamaan (Rohis, Karolin, Rohani Budha, dll)</li>
                        <li>Koperasi Siswa dan unit usaha inovatif</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Section 4: Timeline Kegiatan -->
        <section class="mb-5">
            <h2 class="mb-4" style="color: #1a1a1a; font-weight: 700;">Kalender Kegiatan Tahunan</h2>
            <div class="timeline-kegiatan">
                <div class="timeline-item-wrapper">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h4>Juli - Agustus</h4>
                        <p>Orientasi Siswa Baru (OSISN), Pemilihan Organisasi, Program Outbound</p>
                    </div>
                </div>

                <div class="timeline-item-wrapper">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h4>September - Oktober</h4>
                        <p>Pemilihan OSIS, Pelatihan Kepemimpinan, Launching Program Kesiswaan</p>
                    </div>
                </div>

                <div class="timeline-item-wrapper">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h4>November - Desember</h4>
                        <p>Kompetisi Akademik, Festival Kesenian, Perayaan Akhir Tahun</p>
                    </div>
                </div>

                <div class="timeline-item-wrapper">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h4>Januari - Februari</h4>
                        <p>Program Penguatan Karakter, Pemantapan Akademik</p>
                    </div>
                </div>

                <div class="timeline-item-wrapper">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h4>Maret - April</h4>
                        <p>Kompetisi Olahraga, Pameran Karya Siswa, Field Trip</p>
                    </div>
                </div>

                <div class="timeline-item-wrapper">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h4>Mei - Juni</h4>
                        <p>Kegiatan Kelas Akhir, Program Masa Depan, Apresiasi Prestasi</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 5: Ekstrakurikuler Accordion -->
        <section class="mb-5">
            <h2 class="mb-4" style="color: #1a1a1a; font-weight: 700;">Ekstrakurikuler & Pengembangan Bakat</h2>
            <p style="color: #666; margin-bottom: 30px; font-size: 1.05rem;">
                Kami menyediakan lebih dari 50 pilihan ekstrakurikuler untuk mengembangkan bakat dan minat siswa
            </p>

            <div class="accordion-item-custom">
                <button class="accordion-btn-custom" onclick="toggleAccordion(this)">
                    <span>🏆 Bidang Akademik & Sains</span>
                    <span class="accordion-icon">▼</span>
                </button>
                <div class="accordion-content-custom">
                    <p>
                        <strong>Olimpiade Sains:</strong> Matematika, Fisika, Kimia, Biologi dengan coaching intensif<br><br>
                        <strong>Robotika & Programming:</strong> Club Robotika, Coding Club, Web Development<br><br>
                        <strong>Debat & Presentasi:</strong> English Debate Club, Debat Bahasa Indonesia, Public Speaking<br><br>
                        <strong>Klub Sains:</strong> Science Club, Environmental Club, Science Olympiad Preparation
                    </p>
                </div>
            </div>

            <div class="accordion-item-custom">
                <button class="accordion-btn-custom" onclick="toggleAccordion(this)">
                    <span>🎭 Bidang Seni & Budaya</span>
                    <span class="accordion-icon">▼</span>
                </button>
                <div class="accordion-content-custom">
                    <p>
                        <strong>Musik:</strong> Band, Paduan Suara, Orchestra, Jazz Ensemble<br><br>
                        <strong>Tari:</strong> Tari Tradisional Nusantara, Tari Modern, Tari Kontemporer<br><br>
                        <strong>Seni Rupa:</strong> Melukis, Patung, Desain Grafis, Fotografi<br><br>
                        <strong>Teater & Drama:</strong> Teater Klasik, Drama Komedi, Monolog, Film Production
                    </p>
                </div>
            </div>

            <div class="accordion-item-custom">
                <button class="accordion-btn-custom" onclick="toggleAccordion(this)">
                    <span>⚽ Bidang Olahraga & Kebugaran</span>
                    <span class="accordion-icon">▼</span>
                </button>
                <div class="accordion-content-custom">
                    <p>
                        <strong>Tim Olahraga:</strong> Sepakbola, Futsal, Bola Voli, Bola Basket, Tenis Lapangan<br><br>
                        <strong>Olahraga Raket:</strong> Badminton, Tenis Meja, Bulu Tangkis, Squash<br><br>
                        <strong>Olahraga Air & Atletik:</strong> Renang, Diving, Senam, Atletik Lari<br><br>
                        <strong>Seni Bela Diri:</strong> Pencak Silat, Karate, Taekwondo, Kung Fu
                    </p>
                </div>
            </div>

            <div class="accordion-item-custom">
                <button class="accordion-btn-custom" onclick="toggleAccordion(this)">
                    <span>🌍 Bidang Sosial & Kepemimpinan</span>
                    <span class="accordion-icon">▼</span>
                </button>
                <div class="accordion-content-custom">
                    <p>
                        <strong>Pramuka:</strong> Dewan Ambalan dengan program kepramukaan nasional<br><br>
                        <strong>PMR/Palang Merah Remaja:</strong> Pelatihan pertolongan pertama dan humanitarian<br><br>
                        <strong>Komunitas Sosial:</strong> Community Service Club, Environmental Awareness<br><br>
                        <strong>Jurnalistik & Media:</strong> Majalah Sekolah, Student Broadcasting, Podcast Club
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 6: Feature Cards untuk Program Pembinaan -->
        <section class="mb-5">
            <h2 class="mb-4" style="color: #1a1a1a; font-weight: 700;">Program Pembinaan Karakter</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; margin-top: 30px;">
                <div class="feature-card">
                    <div class="feature-icon">💪</div>
                    <h4>Character Building</h4>
                    <p>Program pengembangan karakter melalui workshop, mentoring, dan kegiatan nilai-nilai sekolah</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🧠</div>
                    <h4>Mental & Emotional Health</h4>
                    <p>Layanan konseling, peer counseling, dan program kesehatan mental yang komprehensif</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">📚</div>
                    <h4>Bimbingan & Konseling</h4>
                    <p>Program BK untuk pengembangan akademik, karir, sosial, dan personal siswa</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">✨</div>
                    <h4>Penghargaan & Apresiasi</h4>
                    <p>Sistem reward untuk siswa berprestasi dan berbudi pekerti luhur</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🤝</div>
                    <h4>Program Mentoring</h4>
                    <p>Pendampingan intensif dari guru dan kakak kelas untuk pengembangan holistik</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🌟</div>
                    <h4>Leadership Development</h4>
                    <p>Program pelatihan kepemimpinan dan entrepreneurship untuk siswa potensial</p>
                </div>
            </div>
        </section>

        <!-- Section 7: Call to Action -->
        <section class="mb-5">
            <div class="info-box" style="background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%); color: white;">
                <div class="info-box-icon" style="color: white;">📞</div>
                <div class="info-box-content">
                    <h3 style="color: white;">Punya Pertanyaan tentang Kesiswaan?</h3>
                    <p style="color: white;">Hubungi Wakil Kepala Sekolah Bidang Kesiswaan atau kunjungi ruang kesiswaan kami</p>
                    <ul style="color: white;">
                        <li>Email: kesiswaan@sman28jkt.sch.id</li>
                        <li>Telepon: (021) 7806293 ext. 102</li>
                        <li>Lokasi: Gedung Utama Lantai 2</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

    <script>
        function toggleAccordion(button) {
            const content = button.nextElementSibling;
            const isActive = content.classList.contains('active');
            
            document.querySelectorAll('.accordion-content-custom').forEach(item => {
                item.classList.remove('active');
            });
            document.querySelectorAll('.accordion-btn-custom').forEach(btn => {
                btn.classList.remove('active');
            });
            
            if (!isActive) {
                content.classList.add('active');
                button.classList.add('active');
            }
        }
    </script>
</x-layouts.homepage>
