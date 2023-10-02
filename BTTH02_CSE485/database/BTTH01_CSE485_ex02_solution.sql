a. SELECT bv.ma_bviet, bv.tieude, bv.ten_bhat, tg.ten_tgia, tl.ten_tloai, bv.ngayviet
FROM baiviet bv
JOIN tacgia tg ON bv.ma_tgia = tg.ma_tgia
JOIN theloai tl ON bv.ma_tloai = tl.ma_tloai
WHERE tl.ten_tloai = 'Nhạc trữ tình';

b. SELECT bv.ma_bviet, bv.tieude, bv.ten_bhat, tg.ten_tgia, tl.ten_tloai, bv.ngayviet
FROM baiviet bv
JOIN tacgia tg ON bv.ma_tgia = tg.ma_tgia
JOIN theloai tl ON bv.ma_tloai = tl.ma_tloai
WHERE tg.ten_tgia = 'Nhacvietplus';

d. SELECT bv.ma_bviet, bv.tieude, bv.ten_bhat, tg.ten_tgia, tl.ten_tloai, bv.ngayviet
FROM baiviet bv
JOIN tacgia tg ON bv.ma_tgia = tg.ma_tgia
JOIN theloai tl ON bv.ma_tloai = tl.ma_tloai;
e. SELECT tl.ma_tloai, tl.ten_tloai, COUNT(bv.ma_bviet) AS so_baiviet
FROM theloai tl
LEFT JOIN baiviet bv ON tl.ma_tloai = bv.ma_tloai
GROUP BY tl.ma_tloai, tl.ten_tloai
ORDER BY so_baiviet DESC
LIMIT 1;
f. SELECT tg.ma_tgia, tg.ten_tgia, COUNT(bv.ma_bviet) AS so_baiviet
FROM tacgia tg
LEFT JOIN baiviet bv ON tg.ma_tgia = bv.ma_tgia
GROUP BY tg.ma_tgia, tg.ten_tgia
ORDER BY so_baiviet DESC
LIMIT 2;
g. SELECT ma_bviet, tieude, ten_bhat
FROM baiviet
WHERE ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%';
h. SELECT ma_bviet, tieude, ten_bhat
FROM baiviet
WHERE tieude LIKE '%yêu%' OR tieude LIKE '%thương%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%'
   OR ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%';