
<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->

@foreach($categorys as $item)
<url>
    <loc>{{ URL::to('/') }}/{{ strtolower($item->category) }}</loc>
    <lastmod>{{ $item->updated_at->tz('UTC')->toAtomString() }}</lastmod>
    <priority>1.00</priority>
</url>
@endforeach

@foreach($blogs as $blog)
<url>
    <loc>{{ URL::to('/') }}/{{ strtolower($blog->category) }}/{{ $blog->slug }}</loc>
    <lastmod>{{ $blog->updated_at->tz('UTC')->toAtomString() }}</lastmod>
    <priority>0.80</priority>
</url>
@endforeach



</urlset>