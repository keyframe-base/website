/*
  Warnings:

  - Added the required column `preset_value` to the `Parameter` table without a default value. This is not possible if the table is not empty.

*/
-- AlterTable
ALTER TABLE `parameter` ADD COLUMN `preset_value` DOUBLE NOT NULL;
