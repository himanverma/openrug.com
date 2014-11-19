<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc><?php echo Router::url('/', true); ?></loc>
        <changefreq>hourly</changefreq>
        <priority>1.0</priority>
    </url>

    <?php
        $dir = new DirectoryIterator("swatch");
        $cnt = 1;
        $ar = array();
        foreach ($dir as $fl) {
            if (!$fl->isDot()) {
                if (!$fl->isDir()) {
                    $name = $fl->getFilename();
                    $num = explode("-", $name);
                    $ar[(int) $num[0]] = $name;
                }
            }
        }
        ksort($ar);
        for ($i = 1; $i <= 600; $i++){
            $name = $ar[$i];
            $code = rtrim($name, ".png");
            $code = explode("-", $code);
            $code = $code[1];
    ?>
        <url>
            <loc><?php echo $this->Html->url("/rugs/bycolor/".$code, true) ?></loc>
            <changefreq>hourly</changefreq>
            <lastmod><?php echo $this->Time->toAtom(time()); ?></lastmod>
            <priority>0.8</priority>
        </url>
        <?php } ?>

        <url>
            <loc><?php echo $this->Html->url("/rugs/shape/square", true) ?></loc>
            <changefreq>hourly</changefreq>
            <lastmod><?php echo $this->Time->toAtom(time()); ?></lastmod>
            <priority>0.8</priority>
        </url>

        <url>
            <loc><?php echo $this->Html->url("/rugs/shape/round", true) ?></loc>
            <changefreq>hourly</changefreq>
            <lastmod><?php echo $this->Time->toAtom(time()); ?></lastmod>
            <priority>0.8</priority>
        </url>

        <url>
            <loc><?php echo $this->Html->url("/rugs/shape/rect", true) ?></loc>
            <changefreq>hourly</changefreq>
            <lastmod><?php echo $this->Time->toAtom(time()); ?></lastmod>
            <priority>0.8</priority>
        </url>

        <url>
            <loc><?php echo $this->Html->url("/rugs/shape/oval", true) ?></loc>
            <changefreq>hourly</changefreq>
            <lastmod><?php echo $this->Time->toAtom(time()); ?></lastmod>
            <priority>0.8</priority>
        </url>

        <url>
            <loc><?php echo $this->Html->url("/rugs/shape/runner", true) ?></loc>
            <changefreq>hourly</changefreq>
            <lastmod><?php echo $this->Time->toAtom(time()); ?></lastmod>
            <priority>0.8</priority>
        </url>

        <?php foreach ($rugcats as $_k => $_v): ?>
            <url>
                <loc><?php echo $this->Html->url("/rugs/bypattern/" . $_k, true) ?></loc>
                <changefreq>hourly</changefreq>
                <lastmod><?php echo $this->Time->toAtom(time()); ?></lastmod>
                <priority>0.8</priority>
            </url>
        <?php endforeach; ?>

        <?php foreach ($genrugs as $genrug): ?>

            <url>
                <loc><?php echo $this->Html->url("/Rugs/editor/" . $genrug['Genrug']['rug_id'] . "/" . $genrug['Genrug']['colorstamp'], true) ?></loc>
                <lastmod><?php echo $this->Time->toAtom($genrug['Genrug']['timestamp']); ?></lastmod>
                <priority>0.8</priority>
                <changefreq>hourly</changefreq>
            </url>
            <url>
                <loc><?php echo $this->Html->url("/Rugs/editor/" . $genrug['Genrug']['rug_id'] . "/" . $genrug['Genrug']['colorstamp'] . "/rect", true) ?></loc>
                <lastmod><?php echo $this->Time->toAtom($genrug['Genrug']['timestamp']); ?></lastmod>
                <priority>0.8</priority>
                <changefreq>hourly</changefreq>
            </url>
            <url>
                <loc><?php echo $this->Html->url("/Rugs/editor/" . $genrug['Genrug']['rug_id'] . "/" . $genrug['Genrug']['colorstamp'] . "/round", true) ?></loc>
                <lastmod><?php echo $this->Time->toAtom($genrug['Genrug']['timestamp']); ?></lastmod>
                <priority>0.8</priority>
                <changefreq>hourly</changefreq>
            </url>
            <url>
                <loc><?php echo $this->Html->url("/Rugs/editor/" . $genrug['Genrug']['rug_id'] . "/" . $genrug['Genrug']['colorstamp'] . "/oval", true) ?></loc>
                <lastmod><?php echo $this->Time->toAtom($genrug['Genrug']['timestamp']); ?></lastmod>
                <priority>0.8</priority>
                <changefreq>hourly</changefreq>
            </url>
            <url>
                <loc><?php echo $this->Html->url("/Rugs/editor/" . $genrug['Genrug']['rug_id'] . "/" . $genrug['Genrug']['colorstamp'] . "/square", true) ?></loc>
                <lastmod><?php echo $this->Time->toAtom($genrug['Genrug']['timestamp']); ?></lastmod>
                <priority>0.8</priority>
                <changefreq>hourly</changefreq>
            </url>
            <url>
                <loc><?php echo $this->Html->url("/Rugs/editor/" . $genrug['Genrug']['rug_id'] . "/" . $genrug['Genrug']['colorstamp'] . "/runner", true) ?></loc>
                <lastmod><?php echo $this->Time->toAtom($genrug['Genrug']['timestamp']); ?></lastmod>
                <priority>0.8</priority>
                <changefreq>hourly</changefreq>
            </url>

        <?php endforeach; ?>

</urlset>