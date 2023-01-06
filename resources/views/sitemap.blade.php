<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
    <url>
        <loc>{{ route('home') }}</loc>
        <lastmod>{{ \Carbon\Carbon::yesterday()->format(DateTime::ATOM) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('resume') }}</loc>
        <lastmod>{{ \Carbon\Carbon::yesterday()->format(DateTime::ATOM) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('uses') }}</loc>
        <lastmod>{{ \Carbon\Carbon::yesterday()->format(DateTime::ATOM) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('goals') }}</loc>
        <lastmod>{{ \Carbon\Carbon::yesterday()->format(DateTime::ATOM) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('contact') }}</loc>
        <lastmod>{{ \Carbon\Carbon::yesterday()->format(DateTime::ATOM) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
</urlset>
