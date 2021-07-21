SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_navigation
-- ----------------------------
DROP TABLE IF EXISTS `tbl_navigation`;
CREATE TABLE `tbl_navigation`
(
    `id`       int(10)                                                       NOT NULL AUTO_INCREMENT COMMENT 'ID',
    `name`     varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '名称',
    `url`      varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL     DEFAULT NULL COMMENT '跳转url',
    `sort`     int(10)                                                       NOT NULL DEFAULT 0 COMMENT '排序',
    `img`      varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片',
    `status`   tinyint(1)                                                    NOT NULL DEFAULT 1 COMMENT '状态1.正常，0，禁用',
    `del_time` int(11)                                                       NULL     DEFAULT 0 COMMENT '软删除',
    PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB
  AUTO_INCREMENT = 1
  CHARACTER SET = utf8mb4
  COLLATE = utf8mb4_general_ci COMMENT = '导航，金刚区'
  ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
