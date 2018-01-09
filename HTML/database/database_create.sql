USE gt_database;

CREATE TABLE IF NOT EXISTS slabs (
  `id` int NOT NULL AUTO_INCREMENT,
  `slab_type` VARCHAR(30),
  `slab_title` VARCHAR(30),
  `slab_lot` VARCHAR(30),
  `slab_dimension` VARCHAR(10),
  `slab_thickness` VARCHAR(10),
  `slab_image` LONGBLOB,

  PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS tiles (
  `id` int not NULL AUTO_INCREMENT,
  `tile_name` VARCHAR(30),
  `tile_size` VARCHAR(10),
  `tile_image` LONGBLOB,
  PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS monuments (
  `id` int not NULL AUTO_INCREMENT,
  `monument_name` VARCHAR(50),
  `monument_image` LONGBLOB,
  PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS login (
  `id` int not NULL AUTO_INCREMENT,
  `username` VARCHAR(50),
  `password` VARCHAR(50),
  PRIMARY KEY (id)
);

INSERT INTO login(`username`,`password`) VALUES
  ('Admin','admin123');



