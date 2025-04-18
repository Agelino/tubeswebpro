const slider = document.getElementById('font-slider');
        const content = document.getElementById('content');

        slider.addEventListener('input', () => {
            const fontSize = slider.value; // Mendapatkan nilai slider
            content.style.fontSize = `${fontSize}px`; // Mengubah ukuran font
        });