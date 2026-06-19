# Laravel Geospatial Web App

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![MapLibre](https://img.shields.io/badge/MapLibre-41b883?style=for-the-badge&logo=maplibre&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=vite&logoColor=white)

This project integrates a dynamic personal portfolio with an interactive web Geographic Information System (Web GIS) using **MapLibre GL JS**.

**Live Demo:** [Lihat Aplikasi Secara Live ](https://mapidportfolio.vercel.app/)  
**Repository:** [GitHub Repository ](https://github.com/asepjamaludinn/geospatial-app)

---

## Key Features

### 1. Interactive Live Map Data (Web GIS)

- **MapLibre GL JS Integration:** High-performance vector maps without relying on paid API keys.
- **Multiple Basemaps:** Users can seamlessly toggle between OpenStreetMap (Street), Esri World Imagery (Satellite), and Carto Dark Matter (Dark Mode).
- **Spatial Data Rendering:** Effectively renders GeoJSON data including interactive Points (Markers with Popups), LineStrings (Route tracing), and Polygons (Zoning areas).
- **3D Camera Controls:** Smooth `flyTo` and `easeTo` animations to transition between 2D Top-Down and 3D Perspectives (pitch & bearing adjustments).

### 2. Modern Portfolio & Works Page

- **Clean Architecture:** Built using reusable Laravel Blade Components (`x-project-card`, `x-button`, `x-project-row`) keeping the views strictly for UI rendering.
- **Staggered/Masonry Grid Layout:** An elegant, asymmetric project gallery mimicking premium Awwwards designs.
- **Mobile-First Design:** Fully responsive layout prioritizing smaller screens first, extending beautifully to desktop views.
- **Custom Premium Animations:** A visually striking off-canvas mobile menu featuring staggered slide-in animations and Framer Motion-like cubic-bezier easing, implemented entirely via Vanilla JS & Tailwind CSS.

### 3. Core Optimizations

- **SEO & Accessibility (A11y):** Implemented semantic HTML, dynamic `aria-current` tags for screen readers, fallback anchor attributes (`role="button"`), Canonical links, Open Graph, and Twitter Cards.
- **Performance:** Dynamic async imports for heavy map libraries (`await import("maplibre-gl")`) ensuring lightning-fast load times on non-map pages.
- **Vite & Tailwind v4:** Next-generation frontend tooling with the latest Tailwind CSS engine.

---

## Tech Stack

- **Backend:** Laravel 11.x (PHP 8.2+)
- **Frontend:** Blade Templating, Vanilla JavaScript (ES6 Modules)
- **Styling:** Tailwind CSS v4.x
- **Mapping Library:** MapLibre GL JS (Dynamic NPM Import)
- **Bundler:** Vite

---

## Instalasi & Setup Lokal

Ikuti langkah-langkah berikut untuk menjalankan aplikasi ini di komputer lokal.

### Prasyarat

Pastikan sistem Anda sudah terinstal:

- **PHP** (v8.2 atau lebih baru)
- **Composer**
- **Node.js** & **NPM**

### Langkah Instalasi

1. **Clone Repository ini**
    ```bash
    git clone (https://github.com/asepjamaludinn/geospatial-app)
    cd geospatial-app
    ```
2. **Install Dependensi PHP (Composer)**

```Bash
composer install
```

3. **Clone Repository ini**
   Salin file .env.example menjadi .env.

```Bash
cp .env.example .env
```

Lalu generate application key Laravel:

```Bash
php artisan key:generate
```

4. **Install Dependensi Frontend (NPM)**

```Bash
npm install
```

_Catatan: Aplikasi ini menggunakan data dummy hardcoded di konfigurasi, sehingga tidak memerlukan setup koneksi database_

5. **Build Assets Frontend**
   Untuk mengompilasi Tailwind v4 dan JavaScript menggunakan Vite:

```Bash
npm run build
```

_Atau gunakan npm run dev jika Anda ingin melakukan perubahan pada mode development_

6. **Jalankan Laravel Development Server**

```Bash
php artisan serve
```

Akses Aplikasi
Buka browser Anda dan kunjungi: http://127.0.0.1:8000

