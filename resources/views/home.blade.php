<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio | bintangnovala</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- box icons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/style.css" />

</head>

<body>
    <!-- header design -->
    <header class="header">
        <a href="#" class="logo">Portofolio</a>

        <i class="bx bx-menu" id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">Beranda</a>
            <a href="#about">Biodata</a>
            <a href="#services">Keahlihan</a>
            <a href="#portofolio">Portofolio</a>
            <a href="#team">Project Team</a>
            {{-- <a href="{{ route('profile.edit') }}" class="btn btn-warning ms-6" style="color:#000;">Edit Semua</a> --}}
        </nav>
    </header>

    <!-- home section design -->
    <section class="home" id="home">
        <div class="home-container">
            <div class="home-content">
                <h3>Hello everyone</h3>
                <h1>Bintang Aulia Novala</h1>
                <h3>Saya seorang <span class="multiple-text"></span></h3>
                <p>
                    {{ $content->description ?? 'Deskripsi belum diatur.' }}
                </p>
                <div class="sosial-media">
                    <a href="https://api.whatsapp.com/send/?phone=6285161571609&text&type=phone_number&app_absent=0"
                        class="bx bxl-whatsapp"></a>
                    <a href="#" class="bx bxl-facebook"></a>
                    <a href="https://www.instagram.com/rhlaminu/" class="bx bxl-instagram"></a>
                    <a href="https://github.com/IniLorion" class="bx bxl-github"></a>
                </div>
                <a href="https://drive.google.com/file/d/1pM21Es4huTrq9oh5iRLeiWbIYQl4bEpz/view?usp=sharing"
                    class="btn">Download CV</a>
            </div>

            <div class="home-img">
                @if (!empty($content->image))
                  <img src="{{ asset('storage/' . $content->image) }}" alt="Image Home">
                @else
                    <img src="assets/image/profile.webp" alt="Foto Profil" />
                @endif
            </div>
        </div>
    </section>

    <!-- about section design -->
    <section class="about" id="about">
        <div class="about-img">
            @if (!empty($aboutContent->image))
               <img src="{{ asset('storage/' . $aboutContent->image) }}" alt="Biodata">
            @else
                <img src="assets/image/tentangkami.jpg" alt="tentang kami" />
            @endif
        </div>
        <div class="about-content">
            <div class="biodata-box" style="font-size:1.5rem; padding:4rem 5rem 3rem 5rem; max-width:1000px;">
                <h2 class="heading" style="font-size:5.5rem; margin-bottom:3rem;">Biodata <span>Saya</span></h2>
                <ul>
                    @if (!empty($aboutContent->name))
                        <li><strong>Nama Lengkap</strong> <span>: {{ $aboutContent->name }}</span></li>
                    @endif
                    @if (!empty($aboutContent->birth))
                        <li><strong>Tanggal Lahir</strong> <span>:
                                {{ \Carbon\Carbon::parse($aboutContent->birth)->format('d-m-Y') }}</span></li>
                    @endif
                    @if (!empty($aboutContent->address))
                        <li><strong>Alamat</strong> <span>: {{ $aboutContent->address }}</span></li>
                    @endif
                    {{-- @if (!empty($aboutContent->education))
                        <li><strong>Pendidikan</strong> <span>: {{ $aboutContent->education }}</span></li>
                    @endif --}}
                    @if (!empty($aboutContent->phone))
                        <li><strong>Telepon</strong> <span>: {{ $aboutContent->phone }}</span></li>
                    @endif
                    {{-- @if (!empty($aboutContent->email))
                        <li><strong>Email</strong> <span>: {{ $aboutContent->email }}</span></li>
                    @endif --}}
                    @if (!empty($aboutContent->gender))
                        <li><strong>Jenis Kelamin</strong> <span>: {{ $aboutContent->gender }}</span></li>
                    @endif
                    {{-- @if (!empty($aboutContent->religion))
                        <li><strong>Agama</strong> <span>: {{ $aboutContent->religion }}</span></li>
                    @endif --}}
                    {{-- @if (!empty($aboutContent->nationality))
                        <li><strong>Kewarganegaraan</strong> <span>: {{ $aboutContent->nationality }}</span></li>
                    @endif --}}
                    {{-- @if (!empty($aboutContent->status))
                        <li><strong>Status</strong> <span>: {{ $aboutContent->status }}</span></li>
                    @endif --}}
                </ul>
            </div>
            <div class="biodata-desc" style="font-size:1.3rem; text-indent: 2rem; padding: 0 5rem;">
                {{ $aboutContent->description ?? 'Deskripsi biodata belum diatur.' }}
            </div>
        </div>
    </section>

    <!-- services section design -->
    <section class="services" id="services">
        <h2 class="heading"><span>Keahliahan</span> saya</h2>

        <div class="services-container">
            <div class="services-box">
                <i class="bx bxs-paint"></i>
                <h3>System Analyst</h3>
                <p>
                    Dalam project saya menganalisis kebutuhan pengguna, merancang arsitektur sistem, dan
                    juga mengkoordinasikan team pengembang..
                </p>
                <!-- <a href="#" class="btn">Read More</a> -->
            </div>
            <div class="services-box">
                <i class="bx bx-code-alt"></i>
                <h3>Web Development</h3>
                <p>
                    Saya menguasai HTML,CSS dan bahasa php,Javascript,MySQL dan beberapa framework seperti
                    laravel,bootstrap,ReactJS dan juga Api..
                </p>
                <!-- <a href="#" class="btn">Read More</a> -->
            </div>
            <div class="services-box">
                <i class="bx bx-bar-chart-alt"></i>
                <h3>Digital Merkating</h3>
                <p>
                    Saya menguasai tentang analisa market , membuat strategi pemasaran,juga membuat konten digital
                    karena saya juga seorang content creator..
                </p>
                <!-- <a href="#" class="btn">Read More</a> -->
            </div>
            <div class="services-box">
                <i class="bx bx-bar-chart-alt"></i>
                <h3>Digital Merkating</h3>
                <p>
                    Saya menguasai tentang analisa market , membuat strategi pemasaran,juga membuat konten digital
                    karena saya juga seorang content creator..
                </p>
                <!-- <a href="#" class="btn">Read More</a> -->
            </div>
            <div class="services-box">
                <i class="bx bx-bar-chart-alt"></i>
                <h3>Digital Merkating</h3>
                <p>
                    Saya menguasai tentang analisa market , membuat strategi pemasaran,juga membuat konten digital
                    karena saya juga seorang content creator..
                </p>
                <!-- <a href="#" class="btn">Read More</a> -->
            </div>
            <div class="services-box">
                <i class="bx bx-bar-chart-alt"></i>
                <h3>Digital Merkating</h3>
                <p>
                    Saya menguasai tentang analisa market , membuat strategi pemasaran,juga membuat konten digital
                    karena saya juga seorang content creator..
                </p>
                <!-- <a href="#" class="btn">Read More</a> -->
            </div>
        </div>
    </section>
    {{-- Contoh penggunaan $portfolios --}}
    @isset($portfolios)
        <section class="portofolio" id="portofolio">
            <h2 class="heading"><span>Portofolio</span>-project</h2>
            <div class="portofolio-container">
                @if (isset($portfolios) && $portfolios->count())
                    @foreach ($portfolios as $portfolio)
                        <div class="portofolio-box">
                            @if ($portfolio->image)
                               <img src="{{ asset('storage/' . $portfolio->image) }}" alt="Portfolio Image">
                            @else
                                <img src="assets/image/portfolio1.jpg" alt="" />
                            @endif
                            <div class="portofolio-layer">
                                <h4>{{ $portfolio->title }}</h4>
                                <p>{{ $portfolio->description }}</p>
                                <a href="#"><i class="bx bx-link-external"></i></a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-center w-100">Tidak ada data portofolio.</p>
                @endif
                <div class="mt-3">
                    {{-- <a href="{{ route('portfolio.create') }}" class="btn btn-primary">Tambah Portofolio</a> --}}
                </div>
            </div>
        </section>
    @endisset

    {{-- project team  --}}
    <section class="services" id="team">
        <h2 class="heading"><span>Project</span> Team</h2>
        <div id="team-container" class="services-container"></div>
    </section>
    {{-- biodata team --}}
    <section class="services">
        <h2 class="heading"><span>Biodata</span> Team</h2>
        <div id="biodata-teman"
            style="display: grid; gap: 32px; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); padding: 24px;">
        </div>
    </section>


    <!-- contact section design -->

    <!-- footer design -->
    <footer class="footer">
        <div class="footer-text">
            <p>portofolio &copy; Bintang Aulia Novala | All Right Reserved.</p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
        </div>
    </footer>

    {{-- Api --}}
    <script>
        const container = document.getElementById("team-container");
        container.innerHTML = ''; // Kosongkan sekali saja di awal

        // amir
        fetch("http://ahmadamiruddin.my.id/api/projects")
            .then(response => response.json())
            .then(data => {
                data.forEach(project => {
                    const card = `
        <div class="services-box">
          <img src="http://ahmadamiruddin.my.id/storage/${project.image}" style="width:120px; height:auto; border-radius: 10px; margin-bottom: 10px;" />
          <h3>${project.title}</h3>
          <p>${project.description}</p>
          ${project.link_projek ? `<a href="${project.link_projek}" target="_blank">Lihat Project</a>` : ''}
          <p><small><i>Dibuat: ${project.created_at}</i></small></p>
        </div>`;
                    container.innerHTML += card;
                });
            })
            .catch(error => {
                console.error("Gagal ambil data project dari teman 1:", error);
            });


        // andhika
        fetch("https://www.andhikamaulana.my.id/api/projects")
            .then(response => response.json())
            .then(data => {
                data.forEach(project => {
                    const card = `
        <div class="services-box">
          <img src="https://www.andhikamaulana.my.id/storage/${project.screenshot}" style="width:120px; height:auto; border-radius: 10px; margin-bottom: 10px;" />
          <h3>${project.title}</h3>
          <p>${project.description}</p>
          ${project.link_projek ? `<a href="${project.link_projek}" target="_blank">Lihat Project</a>` : ''}
          <p><small><i>Dibuat: ${project.created_at}</i></small></p>
        </div>`;
                    container.innerHTML += card;
                });
            })
            .catch(error => {
                console.error("Gagal ambil data project dari teman 2:", error);
            });
    </script>


    {{-- api biodata --}}
    <script>
        // ===== Andhika =====
        fetch("https://www.andhikamaulana.my.id/api/profiles")
            .then(response => response.json())
            .then(responseData => {
                if (!responseData || !responseData.data || !Array.isArray(responseData.data)) {
                    throw new Error("Format data tidak valid");
                }

                const data = responseData.data[0];
                const imagePath = data.photo ?
                    (data.photo.startsWith('http') ? data.photo : 'https://www.andhikamaulana.my.id/storage/' + data
                        .photo) :
                    'https://via.placeholder.com/180x180?text=No+Image';

                const biodataTeman = `
                <div style="background: #23262b; border-radius: 16px; box-shadow: 0 4px 24px rgba(0,255,255,0.08); padding: 24px; color: #fff;">
                    <img src="${imagePath}" alt="Foto Teman" 
                         style="display: block; margin: 0 auto 16px auto; width: 180px; height: 180px; object-fit: cover; border: 4px solid #00e6e6; border-radius: 10%; box-shadow: 0 0 24px #00e6e655;">
                    <h2 style="color: #00e6e6; font-size: 1.5rem; margin-bottom: 12px;">${data.name ?? '-'}</h2>
                    <ul style="list-style: none; padding: 0; font-size: 1rem;">
                        <li><strong>Tanggal Lahir:</strong> ${data.birthdate ? new Date(data.birthdate).toLocaleDateString('id-ID') : '-'}</li>
                        <li><strong>Alamat:</strong> ${data.address ?? '-'}</li>
                        <li><strong>Telepon:</strong> ${data.phone ?? '-'}</li>
                        <li><strong>Jenis Kelamin:</strong> ${data.gender ?? '-'}</li>
                    </ul>
                </div>
            `;
                document.getElementById("biodata-teman").innerHTML += biodataTeman;
            })
            .catch(error => {
                console.error("Gagal ambil biodata Andhika:", error);
                document.getElementById("biodata-teman").innerHTML +=
                    "<p style='color:red;'>Gagal memuat biodata Andhika.</p>";
            });

        // ===== Amir =====
        fetch("http://ahmadamiruddin.my.id/api/teams")
            .then(response => response.json())
            .then(responseData => {
                if (!Array.isArray(responseData)) {
                    throw new Error("Format data tidak valid");
                }

                const data = responseData[0];
                const imagePath = data.image_url || 'https://via.placeholder.com/180x180?text=No+Image';

                const biodataTeman = `
                <div style="background: #23262b; border-radius: 16px; box-shadow: 0 4px 24px rgba(0,255,255,0.08); padding: 24px; color: #fff;">
                    <img src="${imagePath}" alt="Foto Teman" 
                           style="display: block; margin: 0 auto 16px auto; width: 180px; height: 180px; object-fit: cover; border: 4px solid #00e6e6; border-radius: 10%; box-shadow: 0 0 24px #00e6e655;">
                    <h2 style="color: #00e6e6; font-size: 1.5rem; margin-bottom: 12px;">${data.nama_lengkap ?? '-'}</h2>
                    <ul style="list-style: none; padding: 0; font-size: 1rem;">
                        <li><strong>Tanggal Lahir:</strong> ${data.tanggal_lahir ? new Date(data.tanggal_lahir).toLocaleDateString('id-ID') : '-'}</li>
                        <li><strong>Alamat:</strong> ${data.alamat ?? '-'}</li>
                        <li><strong>Telepon:</strong> ${data.nomor_telepon ?? '-'}</li>
                        <li><strong>Jenis Kelamin:</strong> ${data.jenis_kelamin ?? '-'}</li>
                    </ul>
                </div>
            `;
                document.getElementById("biodata-teman").innerHTML += biodataTeman;
            })
            .catch(error => {
                console.error("Gagal ambil biodata Amir:", error);
                document.getElementById("biodata-teman").innerHTML +=
                    "<p style='color:red;'>Gagal memuat biodata Amir.</p>";
            });

        // ===== Bintang =====
        fetch("http://192.168.0.6:8000/api/biodata")
            .then(response => response.json())
            .then(responseData => {
                if (!responseData || !responseData.data || !Array.isArray(responseData.data)) {
                    throw new Error("Format data tidak valid");
                }

                const data = responseData.data[0];
                const imagePath = data.image ?
                    (data.image.startsWith('http') ? data.image : 'http://192.168.0.6:8000/storage/' + data.image) :
                    'https://via.placeholder.com/180x180?text=No+Image';

                const biodataTeman = `
        <div style="background: #23262b; border-radius: 16px; box-shadow: 0 4px 24px rgba(0,255,255,0.08); padding: 24px; color: #fff;">
            <img src="${imagePath}" alt="Foto Teman" 
                   style="display: block; margin: 0 auto 16px auto; width: 180px; height: 180px; object-fit: cover; border: 4px solid #00e6e6; border-radius: 10%; box-shadow: 0 0 24px #00e6e655;">
            <h2 style="color: #00e6e6; font-size: 1.5rem; margin-bottom: 12px;">${data.name ?? '-'}</h2>
            <ul style="list-style: none; padding: 0; font-size: 1rem;">
                <li><strong>Tanggal Lahir:</strong> ${data.birth ? new Date(data.birth).toLocaleDateString('id-ID') : '-'}</li>
                <li><strong>Alamat:</strong> ${data.address ?? '-'}</li>
                <li><strong>Telepon:</strong> ${data.phone ?? '-'}</li>
                <li><strong>Jenis Kelamin:</strong> ${data.gender ?? '-'}</li>
            </ul>
        </div>
        `;
                document.getElementById("biodata-teman").innerHTML += biodataTeman;
            })
            .catch(error => {
                console.error("Gagal ambil biodata Bintang:", error);
                document.getElementById("biodata-teman").innerHTML +=
                    "<p style='color:red;'>Gagal memuat biodata Bintang.</p>";
            });
    </script>





    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- typed js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- custom js -->
    <script src="assets/js/script.js"></script>
</body>

</html>
