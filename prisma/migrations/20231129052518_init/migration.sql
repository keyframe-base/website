-- CreateTable
CREATE TABLE `cubic_bezier_functions` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(191) NOT NULL,
    `x1` DOUBLE NOT NULL,
    `y1` DOUBLE NOT NULL,
    `x2` DOUBLE NOT NULL,
    `y2` DOUBLE NOT NULL,

    UNIQUE INDEX `cubic_bezier_functions_name_key`(`name`),
    PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- CreateTable
CREATE TABLE `animation_directions` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(191) NOT NULL,
    `css_value` VARCHAR(191) NOT NULL,

    UNIQUE INDEX `animation_directions_name_key`(`name`),
    UNIQUE INDEX `animation_directions_css_value_key`(`css_value`),
    PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- CreateTable
CREATE TABLE `parameter_types` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(191) NOT NULL,
    `css_suffix` VARCHAR(191) NOT NULL,

    UNIQUE INDEX `parameter_types_name_key`(`name`),
    UNIQUE INDEX `parameter_types_css_suffix_key`(`css_suffix`),
    PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- CreateTable
CREATE TABLE `Animation` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(191) NOT NULL,
    `description` VARCHAR(191) NOT NULL,

    UNIQUE INDEX `Animation_name_key`(`name`),
    PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- CreateTable
CREATE TABLE `Parameter` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `parameter_type_id` INTEGER NOT NULL,
    `animation_id` INTEGER NOT NULL,
    `name` VARCHAR(191) NOT NULL,
    `variableName` VARCHAR(191) NOT NULL,
    `min_value` DOUBLE NOT NULL,
    `max_value` DOUBLE NOT NULL,

    UNIQUE INDEX `Parameter_name_key`(`name`),
    UNIQUE INDEX `Parameter_variableName_key`(`variableName`),
    PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- CreateTable
CREATE TABLE `Keyframe` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `animation_id` INTEGER NOT NULL,
    `cubic_bezier_function_id` INTEGER NOT NULL,

    PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- AddForeignKey
ALTER TABLE `Parameter` ADD CONSTRAINT `Parameter_parameter_type_id_fkey` FOREIGN KEY (`parameter_type_id`) REFERENCES `parameter_types`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

-- AddForeignKey
ALTER TABLE `Parameter` ADD CONSTRAINT `Parameter_animation_id_fkey` FOREIGN KEY (`animation_id`) REFERENCES `Animation`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

-- AddForeignKey
ALTER TABLE `Keyframe` ADD CONSTRAINT `Keyframe_animation_id_fkey` FOREIGN KEY (`animation_id`) REFERENCES `Animation`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

-- AddForeignKey
ALTER TABLE `Keyframe` ADD CONSTRAINT `Keyframe_cubic_bezier_function_id_fkey` FOREIGN KEY (`cubic_bezier_function_id`) REFERENCES `cubic_bezier_functions`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
