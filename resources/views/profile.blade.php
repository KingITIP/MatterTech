<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>MatterTech | Digital Management untuk Pengusaha Menengah</title>
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            * { box-sizing: border-box; }
            body { margin: 0; font-family: 'Figtree', sans-serif; background: radial-gradient(circle at top right, rgba(74,158,232,.16), transparent 30%), linear-gradient(180deg, #05101f 0%, #081426 45%, #06101f 100%); color: #eef2ff; overflow-x: hidden; }
            .page { min-height: 100vh; display: flex; flex-direction: column; }
            .page-inner { width: min(1200px, calc(100% - 32px)); margin: 0 auto; padding: 24px 0 64px; }
            .navbar { position: sticky; top: 18px; z-index: 20; width: 100%; padding: 0 16px; pointer-events: auto; }
            .navbar-inner { width: min(1200px, calc(100% - 64px)); margin: 0 auto; display: flex; align-items: center; justify-content: space-between; gap: 24px; padding: 14px 20px; background: rgba(5, 16, 31, 0.82); border: 1px solid rgba(255,255,255,0.08); border-radius: 28px; box-shadow: 0 24px 50px rgba(5, 12, 28, 0.28); backdrop-filter: blur(18px); }
            .logo { font-size: 1rem; font-weight: 700; letter-spacing: 0.2em; color: #eef4ff; text-decoration: none; }
            .logo span { color: #4a9ee8; }
            .nav-links { display: flex; gap: 12px; align-items: center; flex-wrap: wrap; background: rgba(255,255,255,0.03); padding: 8px; border-radius: 22px; }
            .nav-link { color: #c8d6ff; text-decoration: none; font-weight: 600; padding: 10px 16px; border-radius: 18px; transition: background 0.25s ease, color 0.25s ease, transform 0.2s ease; }
            .nav-link:hover { color: #ffffff; background: rgba(255,255,255,0.08); transform: translateY(-1px); }
            .nav-actions { display: flex; gap: 12px; flex-wrap: wrap; }
            .cta-button { display: inline-flex; align-items: center; justify-content: center; padding: 0.85rem 1.3rem; border-radius: 999px; background: linear-gradient(135deg, #4a9ee8, #6bb8f5); color: #ffffff; font-weight: 700; text-decoration: none; box-shadow: 0 14px 30px rgba(74,158,232,0.18); }
            .cta-secondary { display: inline-flex; align-items: center; justify-content: center; padding: 0.75rem 1.2rem; border-radius: 999px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.08); color: #c8d6ff; text-decoration: none; transition: background 0.2s ease; }
            .cta-secondary:hover { background: rgba(255,255,255,0.12); }
            .hero { display: grid; gap: 32px; align-items: start; grid-template-columns: 1.1fr 0.95fr; padding-top: 16px; }
            .hero-copy .hero-brand { margin: 0; font-size: clamp(3.6rem, 7vw, 5.8rem); letter-spacing: 0.18em; line-height: 1; font-weight: 900; text-transform: uppercase; }
            .hero-copy .hero-tagline { max-width: 760px; margin: 18px 0 0; font-size: 1.08rem; color: #d8e3ff; line-height: 1.85; letter-spacing: 0.01em; }
            .hero-copy p { max-width: 700px; font-size: 1rem; color: #d8e3ff; line-height: 1.75; margin: 20px 0 0; }
            .hero-copy .hero-meta { margin-top: 28px; display: flex; flex-wrap: wrap; gap: 16px; }
            .hero-copy .hero-pill { background: rgba(74,158,232,0.18); color: #a2c5ff; padding: 0.8rem 1rem; border-radius: 999px; font-weight: 600; letter-spacing: 0.12em; font-size: 0.82rem; }
            .section { margin-top: 56px; padding-top: 32px; border-top: 1px solid rgba(255,255,255,0.12); scroll-margin-top: 120px; }
            .section:first-of-type { border-top: none; padding-top: 0; margin-top: 32px; }
            .section h2 { margin: 0 0 16px; font-size: 2rem; color: #f8fbff; }
            .section p { margin: 0 0 16px; color: #c8d6ff; line-height: 1.85; }
            .contact-panel { display: grid; gap: 20px; grid-template-columns: repeat(3, minmax(220px, 1fr)); margin-top: 24px; }
            .contact-card { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.12); border-radius: 28px; padding: 28px; box-shadow: 0 24px 60px rgba(2,12,32,0.24); transition: transform 0.25s ease, border-color 0.25s ease, background 0.25s ease; }
            .contact-card:hover { transform: translateY(-4px); border-color: rgba(74,158,232,0.4); background: rgba(255,255,255,0.08); }
            .contact-card h3 { margin: 0 0 10px; font-size: 1.15rem; color: #eef4ff; }
            .contact-card p { margin: 0 0 18px; color: #d8e3ff; line-height: 1.7; }
            .contact-card .contact-meta { display: flex; align-items: center; gap: 12px; margin-bottom: 18px; color: #a7c7ff; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; font-size: 0.86rem; }
            .contact-card .contact-meta img { width: 22px; height: 22px; filter: drop-shadow(0 1px 2px rgba(0,0,0,0.2)); }
            .contact-card .contact-button { display: inline-flex; align-items: center; justify-content: center; width: fit-content; padding: 0.9rem 1.3rem; border-radius: 999px; background: linear-gradient(135deg, #4a9ee8, #6bb8f5); color: #ffffff; font-weight: 700; text-decoration: none; box-shadow: 0 16px 30px rgba(74,158,232,0.2); transition: transform 0.2s ease, box-shadow 0.2s ease; }
            .contact-card .contact-button:hover { transform: translateY(-2px); box-shadow: 0 20px 40px rgba(74,158,232,0.3); }
            @media (max-width: 900px) {
                .contact-panel { grid-template-columns: 1fr; }
            }
            .cards { display: grid; gap: 20px; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); }
            .card { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.08); border-radius: 24px; padding: 24px; transition: transform 0.25s ease, box-shadow 0.25s ease; }
            .card:hover { transform: translateY(-6px); box-shadow: 0 28px 70px rgba(8,18,48,0.3); }
            .card h3 { margin: 0 0 12px; font-size: 1.12rem; color: #ffffff; }
            .card p { margin: 0; color: #cbd5ff; }
            .product-grid { display: grid; align-items: start; gap: 20px; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); margin-top: 24px; }
            .product-card { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 28px; padding: 26px; display: flex; flex-direction: column; gap: 18px; transition: transform 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease, background 0.3s ease; }
            .product-card:hover { transform: translateY(-4px); border-color: rgba(74,158,232,0.35); box-shadow: 0 24px 50px rgba(8,18,48,0.22); }
            .product-card.active { background: rgba(17, 31, 58, 0.98); }
            .product-card .product-header { display: flex; align-items: center; gap: 16px; }
            .product-card img { width: 48px; height: 48px; object-fit: contain; }
            .product-card h3 { margin: 0; font-size: 1.3rem; letter-spacing: 0.01em; }
            .product-card .product-price { font-size: 1.65rem; font-weight: 700; color: #eef2ff; margin: 6px 0 0; }
            .product-card .product-meta { display: flex; flex-wrap: wrap; gap: 10px; color: #a8c5f3; font-size: 0.92rem; }
            .product-card .product-meta span { background: rgba(74,158,232,0.14); padding: 8px 12px; border-radius: 999px; }
            .product-card .details { max-height: 0; opacity: 0; overflow: hidden; color: #d8e3ff; line-height: 1.7; font-size: 0.96rem; transition: max-height 0.35s ease, opacity 0.35s ease, margin 0.35s ease, padding 0.35s ease; margin: 0; padding: 0; }
            .product-card.active .details { max-height: 1000px; opacity: 1; margin-top: 10px; padding-top: 10px; }
            .product-card button { margin-top: auto; padding: 0.95rem 1.2rem; border-radius: 999px; border: 1px solid rgba(255,255,255,0.12); background: rgba(255,255,255,0.06); color: #eef2ff; font-weight: 700; transition: background 0.2s ease, transform 0.2s ease, color 0.2s ease; }
            .product-card button:hover { background: rgba(74,158,232,0.16); transform: translateY(-1px); }
            .product-card ul { margin: 14px 0 0; padding-left: 18px; color: #d8e3ff; }
            .product-card li { margin-bottom: 10px; }
            .product-card .details p { margin: 0 0 10px; }
            .product-card.active .details ul { margin-top: 12px; }
            .product-card .details ul { margin: 0; padding-left: 18px; }
            .footer { margin-top: 72px; padding-top: 28px; border-top: 1px solid rgba(255,255,255,0.08); display: flex; flex-wrap: wrap; justify-content: space-between; gap: 16px; color: #9bb1ff; font-size: 0.95rem; }
            .hero-logo { min-height: 420px; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 20px; border-radius: 28px; overflow: hidden; background: linear-gradient(180deg, #071426 0%, #041123 100%); box-shadow: 0 28px 60px rgba(1, 20, 45, 0.35); }
            .hero-logo canvas { width: 100%; height: auto; max-height: 420px; display: block; }
            .hero-logo .logo-text { padding: 22px 22px 28px; text-align: center; }
            .hero-logo .logo-text .brand { font-size: 2.6rem; font-weight: 900; letter-spacing: 0.22em; color: #eef4ff; text-transform: uppercase; }
            .hero-logo .logo-text .brand span { color: #4a9ee8; }
            .hero-logo .logo-text .tag { margin-top: 8px; color: #8fa8ce; font-size: 0.95rem; letter-spacing: 0.22em; text-transform: uppercase; }
            .contact-widget { position: fixed; right: 22px; bottom: 24px; display: grid; gap: 12px; z-index: 30; }
            .contact-widget a { display: inline-flex; align-items: center; justify-content: center; width: 56px; height: 56px; padding: 0; border-radius: 18px; text-decoration: none; color: #ffffff; backdrop-filter: blur(12px); box-shadow: 0 18px 40px rgba(0,0,0,0.25); transition: transform 0.2s ease, box-shadow 0.2s ease; }
            .contact-widget a:hover { transform: translateY(-2px); box-shadow: 0 20px 48px rgba(0,0,0,0.3); }
            .contact-widget a.wa { background: linear-gradient(135deg, #25d366, #06b649); }
            .contact-widget a.email { background: linear-gradient(135deg, #4a9ee8, #6bb8f5); }
            .contact-widget a.instagram { background: linear-gradient(135deg, #e1306c, #c13584); }
            .contact-widget a img { width: 26px; height: 26px; }
            .contact-widget a span { display: none; }
            .hero-copy ul { margin: 24px 0 0; padding-left: 20px; color: #c8d6ff; }
            .section-divider { margin: 48px 0 0; border-top: 1px solid rgba(255,255,255,0.12); }
            .hero-copy li { margin-bottom: 12px; line-height: 1.7; }
            @media (max-width: 900px) {
                .hero { grid-template-columns: 1fr; }
                .hero-logo { order: -1; }
                .navbar-inner { flex-direction: column; align-items: stretch; padding: 16px; }
                .nav-links { width: 100%; justify-content: center; }
                .nav-link { flex: 1 1 auto; text-align: center; }
                .nav-actions { justify-content: center; }
            }
        </style>
    </head>
    <body>
        <div class="page">
            <nav class="navbar">
                <div class="navbar-inner">
                    <a href="#home" class="logo">MATTER<span>TECH</span></a>
                    <div class="nav-links">
                        <a href="#home" class="nav-link">Home</a>
                        <a href="#tentang" class="nav-link">Tentang</a>
                        <a href="#solusi" class="nav-link">Solusi</a>
                        <a href="#produk" class="nav-link">Produk</a>
                        <a href="#kontak" class="nav-link">Kontak</a>
                    </div>
                </div>
            </nav>
            <div class="page-inner">
                <div class="hero" id="home">
                    <div class="hero-copy">
                        <h1 class="hero-brand">MATTER<span style="color:#4a9ee8;">TECH</span></h1>
                        <p class="hero-tagline">Solusi manajemen gudang terintegrasi untuk UMKM dan distributor yang ingin naik kelas dengan operasi yang cepat, akurat, dan mudah digunakan.</p>
                        <p>MatterTech membantu distributor, grosir, dan pelaku F&B mengelola stok, relasi pemasok, dan distribusi secara digital dengan cara yang praktis dan terjangkau.</p>
                        <p>Kami fokus mengurangi waktu admin 60-70%, memperbaiki akurasi stok hingga 95%, dan menyederhanakan proses gudang serta hubungan B2B secara real-time.</p>
                        <div class="hero-meta">
                            <div class="hero-pill">UI mobile-first</div>
                            <div class="hero-pill">Dashboard real-time</div>
                            <div class="hero-pill">Integrasi relasi B2B</div>
                        </div>
                        <ul>
                            <li>Respon cepat via WhatsApp untuk kebutuhan operasional gudang.</li>
                            <li>Dukungan email untuk penawaran dan tim teknis kami.</li>
                            <li>Onboarding cepat dan antarmuka sederhana untuk pengguna non-teknis.</li>
                        </ul>
                    </div>
                    <div class="hero-logo">
                        <canvas id="c"></canvas>
                        <div class="logo-text">
                            <div class="brand">MATTER<span>TECH</span></div>
                            <div class="tag">WAREHOUSE MANAGEMENT SOLUTIONS</div>
                        </div>
                    </div>
                </div>

                <div class="section" id="tentang">
                    <h2>About Us</h2>
                    <p>MatterTech adalah startup yang lahir dari mahasiswa UMM. Kami sedang melakukan inovasi untuk membantu UMKM berkembang dengan solusi digital yang mudah digunakan dan scalable.</p>
                    <p>Kami menyediakan aplikasi mobile custom yang disesuaikan dengan kebutuhan operasi konsumen, mulai dari manajemen gudang hingga pengelolaan relasi mitra dan pelaporan stok real-time.</p>
                    <p>Tim kami menggabungkan pengetahuan bisnis, teknologi, dan desain untuk menghadirkan produk lokal yang relevan bagi pelaku UMKM di Malang dan daerah sekitarnya.</p>
                </div>

                <div class="section">
                    <h2>Latar Belakang Pasar</h2>
                    <p>Di Malang terdapat lebih dari 49.420 UMKM, dengan sekitar 29.652 unit di sektor F&B dan distribusi. Pertumbuhan sektor logistik sebesar 10,26% menunjukkan kebutuhan tinggi akan digitalisasi operasional.</p>
                    <p>Banyak pelaku usaha masih kehilangan waktu hingga 60-70% untuk pekerjaan admin manual dan berisiko mengalami kesalahan stok karena data yang terfragmentasi.</p>
                </div>

                <div class="section" id="masalah">
                    <h2>Masalah yang Kami Selesaikan</h2>
                    <p>MatterTech dirancang untuk mengatasi masalah pencatatan stok yang tidak akurat, koordinasi mitra yang tidak terdokumentasi, serta data operasional yang terpecah. Kami membantu mengurangi human error dan membuat proses lebih transparan.</p>
                    <p>Dengan sistem digital terintegrasi, UMKM dapat menerima pesanan besar dengan lebih percaya diri, mempercepat proses distribusi, dan menyimpan riwayat transaksi mitra secara aman.</p>
                </div>
                <div class="section" id="solusi">
                    <h2>Solusi Utama</h2>
                    <div class="cards">
                        <div class="card">
                            <h3>Inventory WMS</h3>
                            <p>Input barang masuk/keluar dengan QR/barcode, tracking stok real-time, dan alert ketika stok menipis atau overstock.</p>
                        </div>
                        <div class="card">
                            <h3>Dashboard Analitik</h3>
                            <p>Visualisasi produk terlaris, stok kritis, dan laporan yang membantu keputusan bisnis cepat dan akurat.</p>
                        </div>
                        <div class="card">
                            <h3>Manajemen Relasi UMKM</h3>
                            <p>Direktori mitra, dokumentasi transaksi supplier/distributor, serta histori komunikasi dan order dalam satu tempat.</p>
                        </div>
                        <div class="card">
                            <h3>AI Business Agent</h3>
                            <p>Asisten cerdas untuk menjawab query bisnis, merekomendasikan reorder, dan membantu insight dari data operasional.</p>
                        </div>
                    </div>
                </div>

                <div class="section" id="produk">
                    <h2>Paket Produk</h2>
                    <p>Daftar paket implementasi WMS yang kami sediakan, dari solusi cepat siap pakai hingga paket premium dengan agen AI dan custom workflow.</p>
                    <div class="product-grid">
                        <div class="product-card">
                            <div class="product-header">
                                <img src="https://api.iconify.design/mdi/warehouse.svg" alt="Starter WMS" />
                                <h3>STARTER WMS</h3>
                            </div>
                            <div class="product-price">Rp 4.000.000</div>
                            <div class="product-meta"><span>White-Label & Setup</span><span>3-7 Hari</span></div>
                            <div class="details">
                                <p><strong>Konsep:</strong> Aplikasi ready-to-use dari template kamu, namun disesuaikan dengan identitas dan kebutuhan dasar bisnis pelanggan.</p>
                                <p><strong>Target:</strong> UMKM yang butuh digitalisasi gudang cepat, murah, dan fitur standar sudah cukup.</p>
                                <p><strong>Fitur Utama:</strong></p>
                                <ul>
                                    <li>Manajemen Data Barang (CRUD), Kategori, dan Satuan.</li>
                                    <li>Transaksi Stok Masuk & Keluar (Manual).</li>
                                    <li>Dashboard Ringkas (Total barang, stok menipis).</li>
                                    <li>1-2 Role User (Admin & Staff).</li>
                                </ul>
                                <p><strong>Kustomisasi:</strong> Rebranding penuh, setup database awal, dan laporan export PDF/Excel sederhana.</p>
                            </div>
                            <button type="button">Lihat Detail</button>
                        </div>
                        <div class="product-card">
                            <div class="product-header">
                                <img src="https://api.iconify.design/mdi/cube-scan.svg" alt="Growth WMS" />
                                <h3>GROWTH WMS</h3>
                            </div>
                            <div class="product-price">Rp 5.000.000</div>
                            <div class="product-meta"><span>Template + Custom Features</span><span>10-14 Hari</span></div>
                            <div class="details">
                                <p><strong>Konsep:</strong> Basis template dengan modul/fitur baru yang spesifik diminta pelanggan dan tidak ada di template awal.</p>
                                <p><strong>Target:</strong> Bisnis dengan SOP gudang spesifik yang butuh efisiensi tambahan.</p>
                                <p><strong>Termasuk semua fitur Paket 1, plus:</strong></p>
                                <ul>
                                    <li>Scan Barcode/QR untuk stok masuk/keluar.</li>
                                    <li>Multi-Gudang / Multi-Cabang dengan transfer stok.</li>
                                    <li>Sistem Approval untuk request barang.</li>
                                    <li>Integrasi Cetak Thermal untuk label dan surat jalan.</li>
                                    <li>Modul Stok Opname dengan perhitungan selisih.</li>
                                </ul>
                            </div>
                            <button type="button">Lihat Detail</button>
                        </div>
                        <div class="product-card">
                            <div class="product-header">
                                <img src="https://api.iconify.design/mdi/robot-industrial.svg" alt="Smart AI WMS" />
                                <h3>SMART AI WMS</h3>
                            </div>
                            <div class="product-price">Rp 6.000.000</div>
                            <div class="product-meta"><span>Custom + Dedicated AI Agent</span><span>14-21 Hari</span></div>
                            <div class="details">
                                <p><strong>Konsep:</strong> Paket premium dengan AI Agent khusus untuk analisis dan operasional gudang.</p>
                                <p><strong>Target:</strong> Bisnis menengah dengan banyak SKU dan kebutuhan analisis data otomatis.</p>
                                <p><strong>Termasuk semua fitur Paket 2, plus:</strong></p>
                                <ul>
                                    <li>Smart Restock Predictor untuk prediksi stok habis.</li>
                                    <li>Natural Language Query untuk pencarian data gudang.</li>
                                    <li>Dead Stock Analyzer untuk mendeteksi barang tidak bergerak.</li>
                                </ul>
                            </div>
                            <button type="button">Lihat Detail</button>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <h2>Nilai yang Kami Bawa</h2>
                    <p>MatterTech membantu pengusaha UMKM beralih dari proses manual ke digital tanpa kerumitan. Dengan sistem yang mudah dipakai, biaya langganan terjangkau, dan onboarding cepat, kami mendukung kemajuan bisnis kelas menengah.</p>
                    <p>Visi kami selaras dengan target pemerintah dan program lokal: membantu UMKM naik kelas melalui digitalisasi operasional gudang dan jejaring relasi B2B.</p>
                </div>

                <div class="section">
                    <h2>Tagline</h2>
                    <p><strong>“Kelola Gudang & Mitra UMKM Lebih Cerdas, Terukur, dan Terhubung.”</strong></p>
                </div>

                <div class="section" id="kontak">
                    <h2>Kontak Kami</h2>
                    <p>Hubungi MatterTech untuk demo aplikasi, konsultasi solusi UMKM, dan pengembangan mobile custom sesuai kebutuhan usaha Anda.</p>
                    <div class="contact-panel">
                        <div class="contact-card">
                            <div class="contact-meta"><img src="/assets/icons/whatsapp.svg" alt="WA" /><span>WhatsApp</span></div>
                            <h3>Chat langsung</h3>
                            <p>Diskusikan kebutuhan Anda sekarang dan dapatkan respon cepat untuk proposal solusi digital dari tim kami.</p>
                            <a class="contact-button" href="https://wa.me/6281456181945" target="_blank" rel="noopener noreferrer">Mulai Chat</a>
                        </div>
                        <div class="contact-card">
                            <div class="contact-meta"><img src="/assets/icons/email.svg" alt="Email" /><span>Email</span></div>
                            <h3>Request proposal</h3>
                            <p>Kirimkan kebutuhan aplikasi Anda. Kami akan menyusun rencana pengembangan dan estimasi harga khusus untuk UMKM.</p>
                            <a class="contact-button" href="mailto:zamzam009@webmail.umm.ac.id">Kirim Email</a>
                        </div>
                        <div class="contact-card">
                            <div class="contact-meta"><img src="/assets/icons/instagram.svg" alt="Instagram" /><span>Instagram</span></div>
                            <h3>Follow & DM</h3>
                            <p>Lihat portofolio, demo produk, dan testimoni UMKM. Kirim DM agar kami bisa bantu Anda lebih cepat.</p>
                            <a class="contact-button" href="https://www.instagram.com/mattertech.inc?igsh=MWk0Zml0Mmh5cTc1cg==" target="_blank" rel="noopener noreferrer">Kunjungi IG</a>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    <div>MatterTech • WMS digital lokal untuk UMKM Malang</div>
                    <div>Solusi mobile custom, manajemen gudang, dan dukungan digital untuk pengusaha UMKM.</div>
                </div>
            </div>
        </div>

        <div class="contact-widget">
            <a class="wa" href="https://wa.me/6281456181945" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
                <img src="/assets/icons/whatsapp.svg" alt="WhatsApp" />
            </a>
            <a class="email" href="mailto:zamzam009@webmail.umm.ac.id" aria-label="Email">
                <img src="/assets/icons/email.svg" alt="Email" />
            </a>
            <a class="instagram" href="https://www.instagram.com/mattertech.inc?igsh=MWk0Zml0Mmh5cTc1cg==" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                <img src="/assets/icons/instagram.svg" alt="Instagram" />
            </a>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
        <script>
            const canvas = document.getElementById('c');
            const container = canvas.parentElement;
            const W = container.offsetWidth || 680;
            const H = Math.round(W * 0.65);
            canvas.width = W;
            canvas.height = H;
            canvas.style.height = H + 'px';

            const renderer = new THREE.WebGLRenderer({canvas, antialias: true, alpha: true});
            renderer.setSize(W, H);
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
            renderer.setClearColor(0x05101f, 1);
            renderer.shadowMap.enabled = true;
            renderer.shadowMap.type = THREE.PCFSoftShadowMap;

            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(45, W / H, 0.1, 100);
            camera.position.set(0, 0.5, 4.2);

            const geo = new THREE.IcosahedronGeometry(1.3, 0);
            const posArr = geo.attributes.position.array;
            const faceCount = posArr.length / 9;

            const colors = [
              0x6BB8F5, 0x4A9EE8, 0x2E7FCC, 0x1A5FA8,
              0x0D3E80, 0x1B6DB5, 0x3A90D9, 0x5AAEE6,
              0x0A2D60, 0x235FA0, 0x4090D4, 0x1050A0,
              0x62B2F0, 0x3080C8, 0x0C3870, 0x1870C0,
              0x5098D8, 0x2060A8, 0x0E4090, 0x3888D0
            ];

            const meshGroup = new THREE.Group();
            scene.add(meshGroup);

            for (let i = 0; i < faceCount; i++) {
              const triGeo = new THREE.BufferGeometry();
              const verts = new Float32Array([
                posArr[i*9+0], posArr[i*9+1], posArr[i*9+2],
                posArr[i*9+3], posArr[i*9+4], posArr[i*9+5],
                posArr[i*9+6], posArr[i*9+7], posArr[i*9+8],
              ]);
              triGeo.setAttribute('position', new THREE.BufferAttribute(verts, 3));
              triGeo.computeVertexNormals();

              const mat = new THREE.MeshPhongMaterial({
                color: colors[i % colors.length],
                shininess: 80,
                specular: new THREE.Color(0x88bbff),
                side: THREE.FrontSide,
              });
              const mesh = new THREE.Mesh(triGeo, mat);
              mesh.castShadow = true;
              meshGroup.add(mesh);
            }

            const wireGeo = new THREE.IcosahedronGeometry(1.302, 0);
            const wireMat = new THREE.MeshBasicMaterial({
              color: 0xffffff,
              wireframe: true,
              transparent: true,
              opacity: 0.18,
            });
            const wire = new THREE.Mesh(wireGeo, wireMat);
            meshGroup.add(wire);

            const edgeGeo = new THREE.EdgesGeometry(new THREE.IcosahedronGeometry(1.305, 0));
            const edgeMat = new THREE.LineBasicMaterial({ color: 0xaad4ff, transparent: true, opacity: 0.55, linewidth: 1 });
            const edges = new THREE.LineSegments(edgeGeo, edgeMat);
            meshGroup.add(edges);

            const ambLight = new THREE.AmbientLight(0x1a2a4a, 0.8);
            scene.add(ambLight);

            const keyLight = new THREE.DirectionalLight(0x8bbfff, 2.2);
            keyLight.position.set(3, 4, 3);
            keyLight.castShadow = true;
            scene.add(keyLight);

            const fillLight = new THREE.DirectionalLight(0x4499ff, 0.9);
            fillLight.position.set(-3, 1, 2);
            scene.add(fillLight);

            const rimLight = new THREE.DirectionalLight(0xffffff, 0.6);
            rimLight.position.set(0, -3, -2);
            scene.add(rimLight);

            const pointLight = new THREE.PointLight(0x3399ff, 1.5, 8);
            pointLight.position.set(1.5, 2, 2);
            scene.add(pointLight);

            let isDragging = false;
            let lastX = 0, lastY = 0;
            let rotX = 0.3, rotY = 0.5;
            let velX = 0, velY = 0.003;

            function getXY(e) {
              if (e.touches) return { x: e.touches[0].clientX, y: e.touches[0].clientY };
              return { x: e.clientX, y: e.clientY };
            }

            canvas.addEventListener('mousedown', e => { isDragging = true; const p = getXY(e); lastX = p.x; lastY = p.y; velX = 0; velY = 0; });
            canvas.addEventListener('touchstart', e => { isDragging = true; const p = getXY(e); lastX = p.x; lastY = p.y; velX = 0; velY = 0; e.preventDefault(); }, {passive:false});
            window.addEventListener('mouseup', () => isDragging = false);
            window.addEventListener('touchend', () => isDragging = false);
            canvas.addEventListener('mousemove', e => {
              if (!isDragging) return;
              const p = getXY(e);
              const dx = p.x - lastX, dy = p.y - lastY;
              velY = dx * 0.006; velX = dy * 0.006;
              rotY += velY; rotX += velX;
              lastX = p.x; lastY = p.y;
            });
            canvas.addEventListener('touchmove', e => {
              if (!isDragging) return;
              const p = getXY(e);
              const dx = p.x - lastX, dy = p.y - lastY;
              velY = dx * 0.006; velX = dy * 0.006;
              rotY += velY; rotX += velX;
              lastX = p.x; lastY = p.y;
              e.preventDefault();
            }, {passive:false});

            function animate() {
              requestAnimationFrame(animate);
              if (!isDragging) {
                velY *= 0.97;
                velX *= 0.97;
                velY += 0.003;
                rotY += velY;
                rotX += velX;
              }
              meshGroup.rotation.y = rotY;
              meshGroup.rotation.x = rotX;
              renderer.render(scene, camera);
            }
            animate();

            document.querySelectorAll('.product-card button').forEach(button => {
              button.addEventListener('click', () => {
                const card = button.closest('.product-card');
                const isOpening = !card.classList.contains('active');
                document.querySelectorAll('.product-card.active').forEach(openCard => {
                  if (openCard !== card) {
                    openCard.classList.remove('active');
                    const openButton = openCard.querySelector('button');
                    if (openButton) openButton.textContent = 'Lihat Detail';
                  }
                });
                card.classList.toggle('active', isOpening);
                button.textContent = isOpening ? 'Tutup Detail' : 'Lihat Detail';
              });
            });
        </script>
    </body>
</html>
