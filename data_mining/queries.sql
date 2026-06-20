-- 1. Query mencari sales per bulan per toko, sort dari sales tertinggi
SELECT 
    DATE_FORMAT(tgl_trs, '%Y-%m') AS bulan, 
    kode_toko, 
    SUM(net_sales) AS total_sales
FROM sales_data
GROUP BY bulan, kode_toko
ORDER BY total_sales DESC;


-- 2. Query mencari top 20 member dengan %GM tertinggi
-- (Logika: %GM yang akurat didapat dari Total GM dibagi Total Net Sales dikali 100)
SELECT 
    members,
    SUM(gm) AS total_gm,
    SUM(net_sales) AS total_net_sales,
    (SUM(gm) / NULLIF(SUM(net_sales), 0)) * 100 AS persentase_gm
FROM sales_data
WHERE members IS NOT NULL AND members != ''
GROUP BY members
ORDER BY persentase_gm DESC
LIMIT 20;


-- 3. Query mencari kategori dengan qty terbanyak berdasarkan tag OFMBJ aja
SELECT 
    kategori, 
    SUM(qty) AS total_qty
FROM sales_data
WHERE tag = 'OFMBJ'
GROUP BY kategori
ORDER BY total_qty DESC
LIMIT 1;


-- 4. Query mencari toko dengan penjualan department non CIGARETTE & LIGHTER
SELECT 
    kode_toko, 
    SUM(net_sales) AS total_sales_non_cigarette
FROM sales_data
WHERE departemen != 'CIGARETTE & LIGHTER'
GROUP BY kode_toko
ORDER BY total_sales_non_cigarette DESC;
