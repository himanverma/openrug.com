<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

<url>
<loc><?php echo Router::url('/',true); ?></loc>
<changefreq>daily</changefreq>
<priority>1.0</priority>
</url>

<!-- static pages -->



<!-- posts-->

<?php foreach ($genrugs as $genrug):?>

<url>
    <loc><?php echo $this->Html->url("/Rugs/editor/".$genrug['Genrug']['rug_id']."/".$genrug['Genrug']['colorstamp'], true) ?></loc>
<lastmod><?php echo $this->Time->toAtom($genrug['Genrug']['timestamp']); ?></lastmod>
<priority>0.8</priority>
</url>
<url>
    <loc><?php echo $this->Html->url("/Rugs/editor/".$genrug['Genrug']['rug_id']."/".$genrug['Genrug']['colorstamp']."/rect", true) ?></loc>
<lastmod><?php echo $this->Time->toAtom($genrug['Genrug']['timestamp']); ?></lastmod>
<priority>0.8</priority>
</url>
<url>
    <loc><?php echo $this->Html->url("/Rugs/editor/".$genrug['Genrug']['rug_id']."/".$genrug['Genrug']['colorstamp']."/round", true) ?></loc>
<lastmod><?php echo $this->Time->toAtom($genrug['Genrug']['timestamp']); ?></lastmod>
<priority>0.8</priority>
</url>
<url>
    <loc><?php echo $this->Html->url("/Rugs/editor/".$genrug['Genrug']['rug_id']."/".$genrug['Genrug']['colorstamp']."/oval", true) ?></loc>
<lastmod><?php echo $this->Time->toAtom($genrug['Genrug']['timestamp']); ?></lastmod>
<priority>0.8</priority>
</url>
<url>
    <loc><?php echo $this->Html->url("/Rugs/editor/".$genrug['Genrug']['rug_id']."/".$genrug['Genrug']['colorstamp']."/square", true) ?></loc>
<lastmod><?php echo $this->Time->toAtom($genrug['Genrug']['timestamp']); ?></lastmod>
<priority>0.8</priority>
</url>
<url>
    <loc><?php echo $this->Html->url("/Rugs/editor/".$genrug['Genrug']['rug_id']."/".$genrug['Genrug']['colorstamp']."/runner", true) ?></loc>
<lastmod><?php echo $this->Time->toAtom($genrug['Genrug']['timestamp']); ?></lastmod>
<priority>0.8</priority>
</url>

<?php endforeach; ?>

</urlset>