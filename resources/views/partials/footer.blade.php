<footer style="background-color: #343a40; color: white; font-family: sans-serif;">

    <!-- Bagian Atas: Kontak dan Streaming -->
    <div style="max-width: 1200px; margin: 0 auto; padding: 40px 20px 30px; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; border-bottom: 1px solid #555;">

        <!-- Tombol Kontak WhatsApp -->
        <div>
            <a href="https://wa.me/+6287847400663" target="_blank"
               style="background-color: #25D366; color: white; padding: 12px 24px; border-radius: 6px; text-decoration: none; font-weight: bold; display: inline-flex; align-items: center; gap: 8px;">
                <img src="https://cdn-icons-png.flaticon.com/24/733/733585.png" alt="WA" style="width: 20px; height: 20px;">
                Kontak via WhatsApp
            </a>
        </div>

        <!-- Layanan Streaming -->
        <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="https://youtube.com/@relawaneskar" target="_blank"
               style="background-color: #FF0000; color: white; padding: 12px 20px; border-radius: 6px; text-decoration: none; font-weight: bold; display: inline-flex; align-items: center; gap: 8px;">
                <img src="https://cdn-icons-png.flaticon.com/24/1384/1384060.png" alt="YouTube" style="width: 20px; height: 20px;">
                YouTube Live
            </a>
            <a href="https://instagram.com/relawaneskar" target="_blank"
               style="background-color: #E1306C; color: white; padding: 12px 20px; border-radius: 6px; text-decoration: none; font-weight: bold; display: inline-flex; align-items: center; gap: 8px;">
                <img src="https://cdn-icons-png.flaticon.com/24/2111/2111463.png" alt="Instagram" style="width: 20px; height: 20px;">
                Instagram Live
            </a>
        </div>
    </div>

    <!-- Bagian Bawah -->
    <div style="max-width: 1200px; margin: 0 auto; padding: 40px 20px; display: flex; flex-wrap: wrap; justify-content: space-between;">

        <!-- Logo dan Deskripsi -->
        <div style="flex: 1 1 250px; margin-bottom: 20px;">
            <h2 style="margin-bottom: 10px;">Lokatara</h2>
            <p style="color: #ccc;">Lorem ipsum dolor sit amet.</p>
        </div>

        <!-- Navigasi -->
        <div style="flex: 1 1 150px; margin-bottom: 20px;">
            <h4>Menu</h4>
            <ul style="list-style: none; padding: 0; color: #ccc;">
                <li><a href="{{ url('/tentang') }}" style="color: #ccc; text-decoration: none;">Tentang Kami</a></li>
                <li><a href="{{ url('/informasi') }}" style="color: #ccc; text-decoration: none;">Informasi</a></li>
                <li><a href="{{ url('/kerjasama') }}" style="color: #ccc; text-decoration: none;">Kerjasama</a></li>
            </ul>
        </div>

        <!-- Media Sosial -->
        <div style="flex: 1 1 200px; margin-bottom: 20px;">
            <h4>Ikuti Kami</h4>
            <p>
                <a href="https://instagram.com/relawaneskar" target="_blank" style="color: #ccc; text-decoration: none;">
                    <img src="https://cdn-icons-png.flaticon.com/24/2111/2111463.png" alt="Instagram" style="vertical-align: middle; margin-right: 8px;">
                    @lokataraevent
                </a>
            </p>
            <p>
                <a href="https://youtube.com/@relawaneskar" target="_blank" style="color: #ccc; text-decoration: none;">
                    <img src="https://cdn-icons-png.flaticon.com/24/1384/1384060.png" alt="YouTube" style="vertical-align: middle; margin-right: 8px;">
                    Lokatara Official
                </a>
            </p>
        </div>

    </div>

    <!-- Copyright -->
    <div style="text-align: center; padding: 20px 0; border-top: 1px solid #555; color: #aaa;">
        &copy; {{ date('Y') }} Lokatara. All rights reserved.
    </div>
</footer>
