<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biodata Team</title>
    <style>
        body {
            background: #23262b;
            color: #fff;
            font-family: 'Poppins', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px;
            margin: 60px auto;
            background: #23262b;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,255,255,0.08);
            padding: 48px 40px;
            display: flex;
            align-items: center;
            gap: 48px;
        }
        .biodata-img {
            flex: 0 0 220px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .biodata-img img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #00e6e6;
            box-shadow: 0 0 32px #00e6e655;
            background: #1a1c20;
        }
        .biodata-content {
            flex: 1;
        }
        .biodata-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 32px;
            color: #fff;
            letter-spacing: 2px;
        }
        .biodata-title .highlight {
            color: #00e6e6;
        }
        ul {
            list-style: disc inside;
            padding: 0;
            margin: 0 0 16px 0;
        }
        li {
            margin-bottom: 12px;
            font-size: 1.2rem;
        }
        .label {
            font-weight: bold;
            color: #fff;
        }
        .value {
            color: #00e6e6;
            font-weight: 500;
        }
        @media (max-width: 700px) {
            .container {
                flex-direction: column;
                padding: 24px 10px;
                gap: 24px;
            }
            .biodata-title {
                font-size: 2rem;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="biodata-img">
            <img id="foto-teman" src="" alt="Foto Teman" onerror="this.src='https://via.placeholder.com/200x200?text=No+Image';">
        </div>
        <div class="biodata-content">
            <div class="biodata-title">
                <span class="highlight">Biodata</span> Team
            </div>
            <ul id="biodata-list"></ul>
            <div id="empty-msg" style="color:#aaa; margin-top:24px; display:none;">Tidak ada data biodata.</div>
        </div>
    </div>
    <script>
        fetch('/api/biodatas')
            .then(res => res.json())
            .then(data => {
                const list = document.getElementById('biodata-list');
                const empty = document.getElementById('empty-msg');
                const foto = document.getElementById('foto-teman');
                if (!data.length) {
                    empty.style.display = 'block';
                    return;
                }
                const d = data[0]; // tampilkan data pertama
                list.innerHTML = `
                    <li><span class="label">Nama Lengkap :</span> <span class="value">${d.nama ?? '-'}</span></li>
                    <li><span class="label">Tanggal Lahir :</span> <span class="value">${d.tanggal_lahir ?? '-'}</span></li>
                    <li><span class="label">Alamat :</span> <span class="value">${d.alamat ?? '-'}</span></li>
                    <li><span class="label">Telepon :</span> <span class="value">${d.telepon ?? '-'}</span></li>
                    <li><span class="label">Jenis Kelamin :</span> <span class="value">${d.jenis_kelamin ?? '-'}</span></li>
                `;
                // tampilkan foto jika ada
                if (d.foto && d.foto !== '') {
                    foto.src = '/storage/' + d.foto;
                } else {
                    foto.src = 'https://via.placeholder.com/200x200?text=No+Image';
                }
            })
            .catch(() => {
                document.getElementById('empty-msg').innerText = 'Gagal memuat biodata teman.';
                document.getElementById('empty-msg').style.display = 'block';
            });
    </script>
</body>
</html>
