<?php

use Illuminate\Database\Seeder;

class GoodsAttributeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('goods_attribute')->delete();
        
        \DB::table('goods_attribute')->insert(array (
            0 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006002,
                'id' => 1,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            1 => 
            array (
                'attribute' => '适用床尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006002,
                'id' => 2,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米+1.8米通用',
            ),
            2 => 
            array (
                'attribute' => '件数',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006002,
                'id' => 3,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '4件',
            ),
            3 => 
            array (
                'attribute' => '工艺',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006002,
                'id' => 4,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '刺绣',
            ),
            4 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006002,
                'id' => 5,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB18401-2010 B类',
            ),
            5 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006002,
                'id' => 6,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国',
            ),
            6 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006002,
                'id' => 7,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
            ),
            7 => 
            array (
                'attribute' => '填充物重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006007,
                'id' => 8,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '2000g/2300g',
            ),
            8 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006007,
                'id' => 9,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '200*230cm/220*240cm',
            ),
            9 => 
            array (
                'attribute' => '面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006007,
                'id' => 10,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            10 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006007,
                'id' => 11,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%羊毛',
            ),
            11 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006007,
                'id' => 12,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.经过碳化、清洗、梳理的天然羊毛被带会有少量味道，通风晾晒2-3天即可散去                     2.为减少羊毛漂白等化学用品的处理时间，部分羊毛可能未完全脱色，轻微泛黄属羊毛原色，为正常现象。',
            ),
            12 => 
            array (
                'attribute' => '填充物重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006010,
                'id' => 13,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '2000g/2300g',
            ),
            13 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006010,
                'id' => 14,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '200*230cm/220*240cm',
            ),
            14 => 
            array (
                'attribute' => '面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006010,
                'id' => 15,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            15 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006010,
                'id' => 16,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '超细羊毛',
            ),
            16 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006010,
                'id' => 17,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.经过碳化、清洗、梳理的天然羊毛被带会有少量味道，通风晾晒2-3天即可散去                                        2.为减少羊毛漂白等化学用品的处理时间，部分羊毛可能未完全脱色，轻微泛黄属羊毛原色，为正常现象。',
            ),
            17 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006013,
                'id' => 18,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '200*230cm/ 220*240cm',
            ),
            18 => 
            array (
                'attribute' => '面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006013,
                'id' => 19,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            19 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006013,
                'id' => 20,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%双宫茧桑蚕丝',
            ),
            20 => 
            array (
                'attribute' => '填充物重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006013,
                'id' => 21,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '0.5KG/1KG',
            ),
            21 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006013,
                'id' => 22,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '天然桑蚕丝具有正常蛋白味道，通风晾晒2-3天即可散去',
            ),
            22 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006014,
                'id' => 23,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '200*230cm/ 220*240cm',
            ),
            23 => 
            array (
                'attribute' => '面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006014,
                'id' => 24,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            24 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006014,
                'id' => 25,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%双宫茧桑蚕丝',
            ),
            25 => 
            array (
                'attribute' => '填充物重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006014,
                'id' => 26,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '0.5+1.5KG/1+2KG',
            ),
            26 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1006014,
                'id' => 27,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '天然桑蚕丝具有正常蛋白味道，通风晾晒2-3天即可散去',
            ),
            27 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009009,
                'id' => 28,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '200*230cm/220*240cm',
            ),
            28 => 
            array (
                'attribute' => '填充成分',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009009,
                'id' => 29,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '白鹅绒',
            ),
            29 => 
            array (
                'attribute' => '面料成分',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009009,
                'id' => 30,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '60%棉 40%聚酯纤维',
            ),
            30 => 
            array (
                'attribute' => '填充物重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009009,
                'id' => 31,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1500g/1700g',
            ),
            31 => 
            array (
                'attribute' => '含绒量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009009,
                'id' => 32,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '95%',
            ),
            32 => 
            array (
                'attribute' => '工艺',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009009,
                'id' => 33,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '双层立衬',
            ),
            33 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009012,
                'id' => 34,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '48*74cm',
            ),
            34 => 
            array (
                'attribute' => '面料成分',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009012,
                'id' => 35,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            35 => 
            array (
                'attribute' => '填充成分',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009012,
                'id' => 36,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%聚酯纤维',
            ),
            36 => 
            array (
                'attribute' => '重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009012,
                'id' => 37,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1000g',
            ),
            37 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009012,
                'id' => 38,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国',
            ),
            38 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009012,
                'id' => 39,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '枕芯类商品受身高、体型、睡眠习惯不同，产生不同的使用体验，建议多试睡几款枕头，挑选最适合的进行使用。',
            ),
            39 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009013,
                'id' => 40,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '48*74cm',
            ),
            40 => 
            array (
                'attribute' => '面料成分',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009013,
                'id' => 41,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '70%高模量聚酯+30%聚酰胺',
            ),
            41 => 
            array (
                'attribute' => '填充成分',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009013,
                'id' => 42,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%聚酯纤维',
            ),
            42 => 
            array (
                'attribute' => '重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009013,
                'id' => 43,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1000g',
            ),
            43 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009013,
                'id' => 44,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国',
            ),
            44 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009013,
                'id' => 45,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '枕芯类商品受身高、体型、睡眠习惯不同，产生不同的使用体验，建议多试睡几款枕头，挑选最适合的进行使用。',
            ),
            45 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009024,
                'id' => 46,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '65*65*43cm',
            ),
            46 => 
            array (
                'attribute' => '外套材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009024,
                'id' => 47,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '外套帆布：100%棉；外套弹力布：锦纶80%氨纶20%',
            ),
            47 => 
            array (
                'attribute' => '内胆材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009024,
                'id' => 48,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '内胆面料：100%锦纶；填充物：聚苯乙烯（发泡粒子）',
            ),
            48 => 
            array (
                'attribute' => '*温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1009024,
                'id' => 49,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '本品为人工填充粒子，重量难免会有误差，敬请谅解。同时产品在运输过程中受挤压，也可能会造成凹陷。储存时请避免重物挤压以引起泡沫粒子塌陷。',
            ),
            49 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1010000,
                'id' => 50,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%羊毛',
            ),
            50 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1010000,
                'id' => 51,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '200*150cm',
            ),
            51 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1010000,
                'id' => 52,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.羊毛毯采取传统机织工艺，纯天然织造的，直接接触皮肤会有轻微扎人。
2.初次使用时会有少量浮毛，建议干洗处理。
3.商品为纯羊毛织造而成，若有少量气味请通风2-3天去除。',
            ),
            52 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1010001,
                'id' => 53,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%羊毛',
            ),
            53 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1010001,
                'id' => 54,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '200*150cm',
            ),
            54 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1010001,
                'id' => 55,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.羊毛毯采取传统机织工艺，纯天然织造的，直接接触皮肤会有轻微扎人。
2.初次使用时会有少量浮毛，建议干洗处理。
3.商品为纯羊毛织造而成，若有少量气味请通风2-3天去除。',
            ),
            55 => 
            array (
                'attribute' => '面料成分',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1011004,
                'id' => 56,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100% 棉',
            ),
            56 => 
            array (
                'attribute' => '安全技术',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1011004,
                'id' => 57,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB18401-2010 B类',
            ),
            57 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1011004,
                'id' => 58,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '150×200cm',
            ),
            58 => 
            array (
                'attribute' => '产品等级',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1011004,
                'id' => 59,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '一等品',
            ),
            59 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1011004,
                'id' => 60,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国',
            ),
            60 => 
            array (
                'attribute' => '重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1011004,
                'id' => 61,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1800g',
            ),
            61 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1011004,
                'id' => 62,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.深色纯棉毛巾被在织造染色过程中，巾面更易产生微细的纤维浮绒，使用前建议用清水漂洗1-2次，即可去掉产品上的浮绒。
2.在洗涤时一定要注意不要与衣服混在一起机洗，强力的搓洗会引起掉毛或勾线现象。
3.纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
            ),
            62 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1015007,
                'id' => 63,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '45cm*45cm',
            ),
            63 => 
            array (
                'attribute' => '面料成份',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1015007,
                'id' => 64,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%全棉',
            ),
            64 => 
            array (
                'attribute' => '内芯面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1015007,
                'id' => 65,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%全棉',
            ),
            65 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1015007,
                'id' => 66,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%聚酯纤维',
            ),
            66 => 
            array (
                'attribute' => '重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1015007,
                'id' => 67,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '470g（内芯）',
            ),
            67 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1015007,
                'id' => 68,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国',
            ),
            68 => 
            array (
                'attribute' => '填充成分',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019000,
                'id' => 69,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '聚醚型聚氨酯',
            ),
            69 => 
            array (
                'attribute' => '面料成分',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019000,
                'id' => 70,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%聚酯纤维',
            ),
            70 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019000,
                'id' => 71,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '50cm×30cm×9cm-7cm',
            ),
            71 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019000,
                'id' => 72,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '白色',
            ),
            72 => 
            array (
                'attribute' => '适用人数',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019000,
                'id' => 73,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '单人',
            ),
            73 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019000,
                'id' => 74,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.记忆绵产品为进口环保化学材质聚氨酯发泡而成，刚打开包装会有少量聚氨酯气体产生，拆除外套通风除味3-5天即可。                                                                                  2.枕芯类商品受身高、体型、睡眠习惯不同，产生不同的使用体验，建议多试睡几款枕头，挑选最适合的进行使用。',
            ),
            74 => 
            array (
                'attribute' => '填充成分',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019001,
                'id' => 75,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '聚醚型聚氨酯',
            ),
            75 => 
            array (
                'attribute' => '面料成分',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019001,
                'id' => 76,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%聚酯纤维',
            ),
            76 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019001,
                'id' => 77,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '50cm×30cm×10cm-6cm',
            ),
            77 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019001,
                'id' => 78,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '白色',
            ),
            78 => 
            array (
                'attribute' => '适用人数',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019001,
                'id' => 79,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '单人',
            ),
            79 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019001,
                'id' => 80,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.记忆绵产品为进口环保化学材质聚氨酯发泡而成，刚打开包装会有少量聚氨酯气体产生，拆除外套通风除味3-5天即可。 2.枕芯类商品受身高、体型、睡眠习惯不同，产生不同的使用体验，建议多试睡几款枕头，挑选最适合的进行使用。',
            ),
            80 => 
            array (
                'attribute' => '填充成分',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019002,
                'id' => 81,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '聚醚型聚氨酯',
            ),
            81 => 
            array (
                'attribute' => '面料成分',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019002,
                'id' => 82,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '聚酯纤维',
            ),
            82 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019002,
                'id' => 83,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '135cm×36cm×10cm-7cm',
            ),
            83 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019002,
                'id' => 84,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '白色',
            ),
            84 => 
            array (
                'attribute' => '适用人数',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019002,
                'id' => 85,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '双人',
            ),
            85 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019002,
                'id' => 86,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.记忆绵产品为进口环保化学材质聚氨酯发泡而成，刚打开包装会有少量聚氨酯气体产生，拆除外套通风除味3-5天即可。 
2.枕芯类商品受身高、体型、睡眠习惯不同，产生不同的使用体验，建议多试睡几款枕头，挑选最适合的进行使用。',
            ),
            86 => 
            array (
                'attribute' => '面料成分',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019006,
                'id' => 87,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            87 => 
            array (
                'attribute' => '填充成分',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019006,
                'id' => 88,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '20% 夜交藤+80% 聚酯纤维',
            ),
            88 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019006,
                'id' => 89,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '48*74cm',
            ),
            89 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019006,
                'id' => 90,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '白色',
            ),
            90 => 
            array (
                'attribute' => '适用人数',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019006,
                'id' => 91,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '单人',
            ),
            91 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1019006,
                'id' => 92,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.植物填充，遇梅雨季节需要通风、干燥保存。 
2.枕芯类商品受身高、体型、睡眠习惯不同，产生不同的使用体验，建议多试睡几款枕头，挑选最适合的进行使用。',
            ),
            92 => 
            array (
                'attribute' => '填充成分',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1020000,
                'id' => 93,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '聚氨酯',
            ),
            93 => 
            array (
                'attribute' => '面料成分',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1020000,
                'id' => 94,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            94 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1020000,
                'id' => 95,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '33cm×31cm×10cm',
            ),
            95 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1020000,
                'id' => 96,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '灰色条纹/粉色条纹',
            ),
            96 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1021004,
                'id' => 97,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%羊毛',
            ),
            97 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1021004,
                'id' => 98,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '150*200cm',
            ),
            98 => 
            array (
                'attribute' => '产品等级',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1021004,
                'id' => 99,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '一等品',
            ),
            99 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1021004,
                'id' => 100,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国',
            ),
            100 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1021004,
                'id' => 101,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.羊毛毯采取传统机织工艺，纯天然织造的，直接接触皮肤会有轻微扎人。
2.初次使用时会有少量浮毛，建议干洗处理。
3.商品为纯羊毛织造而成，若有少量气味请通风2-3天去除。',
            ),
            101 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1021010,
                'id' => 102,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            102 => 
            array (
                'attribute' => '安全类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1021010,
                'id' => 103,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB18401-2010 B类',
            ),
            103 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1021010,
                'id' => 104,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '江苏南通',
            ),
            104 => 
            array (
                'attribute' => '根数',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1021010,
                'id' => 105,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '200根',
            ),
            105 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1021010,
                'id' => 106,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
            ),
            106 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1021010,
                'id' => 107,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
            ),
            107 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1022000,
                'id' => 108,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            108 => 
            array (
                'attribute' => '安全类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1022000,
                'id' => 109,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB18401-2010 B类',
            ),
            109 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1022000,
                'id' => 110,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国山东',
            ),
            110 => 
            array (
                'attribute' => '根数',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1022000,
                'id' => 111,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '200根',
            ),
            111 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1022000,
                'id' => 112,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '被套200*230cm；床单245*250cm；枕套48*74cm',
            ),
            112 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1022000,
                'id' => 113,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
            ),
            113 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1022001,
                'id' => 114,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            114 => 
            array (
                'attribute' => '安全类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1022001,
                'id' => 115,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB18401-2010 B类',
            ),
            115 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1022001,
                'id' => 116,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国山东',
            ),
            116 => 
            array (
                'attribute' => '根数',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1022001,
                'id' => 117,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '200根',
            ),
            117 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1022001,
                'id' => 118,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '被套200*230cm；床单245*250cm；枕套48*74cm',
            ),
            118 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1022001,
                'id' => 119,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
            ),
            119 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1023012,
                'id' => 120,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            120 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1023012,
                'id' => 121,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '180*220cm',
            ),
            121 => 
            array (
                'attribute' => '安全技术类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1023012,
                'id' => 122,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB18401-2010 B类',
            ),
            122 => 
            array (
                'attribute' => '产品等级',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1023012,
                'id' => 123,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '一等品',
            ),
            123 => 
            array (
                'attribute' => '重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1023012,
                'id' => 124,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1480g',
            ),
            124 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1023012,
                'id' => 125,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.深色纯棉毛巾被在织造染色过程中，巾面更易产生微细的纤维浮绒，使用前建议用清水漂洗1-2次，即可去掉产品上的浮绒。
2.在洗涤时一定要注意不要与衣服混在一起机洗，强力的搓洗会引起掉毛或勾线现象。
3.纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
            ),
            125 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1023032,
                'id' => 126,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            126 => 
            array (
                'attribute' => '安全类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1023032,
                'id' => 127,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB18401-2010 B类',
            ),
            127 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1023032,
                'id' => 128,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国山东',
            ),
            128 => 
            array (
                'attribute' => '根数',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1023032,
                'id' => 129,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '200根',
            ),
            129 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1023032,
                'id' => 130,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
            ),
            130 => 
            array (
                'attribute' => '工艺',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1023032,
                'id' => 131,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '色织工艺',
            ),
            131 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1023032,
                'id' => 132,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
            ),
            132 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1023034,
                'id' => 133,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '正面：100%棉  背面：15%棉  85%涤   底衬：100%涤',
            ),
            133 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1023034,
                'id' => 134,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '70% 白鸭绒  30%白鸭绒片',
            ),
            134 => 
            array (
                'attribute' => '克重',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1023034,
                'id' => 135,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '250g',
            ),
            135 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1023034,
                'id' => 136,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国',
            ),
            136 => 
            array (
                'attribute' => '安全类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1023034,
                'id' => 137,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB18401-2010 B类',
            ),
            137 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1023034,
                'id' => 138,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '水银灰/ 水蓝/ 水粉',
            ),
            138 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1027004,
                'id' => 139,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            139 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1027004,
                'id' => 140,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '150*200cm',
            ),
            140 => 
            array (
                'attribute' => '产品等级',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1027004,
                'id' => 141,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '一等品',
            ),
            141 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1027004,
                'id' => 142,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '灰白格/粉白格',
            ),
            142 => 
            array (
                'attribute' => '重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1027004,
                'id' => 143,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1136g',
            ),
            143 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1029005,
                'id' => 144,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '65% 天丝 35% 亚麻',
            ),
            144 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1029005,
                'id' => 145,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
            ),
            145 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1029005,
                'id' => 146,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国江苏',
            ),
            146 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1029005,
                'id' => 147,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22844-2009',
            ),
            147 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1029005,
                'id' => 148,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '渐变紫 / 渐变绿',
            ),
            148 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1029005,
                'id' => 149,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
            ),
            149 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030001,
                'id' => 150,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '面纱：100%羊毛  底纱：55.7%棉  27.1%聚酯纤维  4.7%羊毛   12.5%其他',
            ),
            150 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030001,
                'id' => 151,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '印度',
            ),
            151 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030001,
                'id' => 152,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'QB/T 2756-2005',
            ),
            152 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030001,
                'id' => 153,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '160*230cm',
            ),
            153 => 
            array (
                'attribute' => '工艺',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030001,
                'id' => 154,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '手工编织',
            ),
            154 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030001,
                'id' => 155,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1：羊毛材质存在一点羊骚味实属正常情况，建议开窗通风，多散散味道即可。
2：羊毛地毯刚刚开始使用的时候多多少少都会有一点掉毛的情况，建议开始使用的时候用吸尘器多吸几次，之后掉毛的情况就会有改善。  
3：因为天然羊毛材质，所以脚感会有一点点刺，不属于产品质量问题。',
            ),
            155 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030002,
                'id' => 156,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '绒面：93%羊毛  7%腈纶 衬背：100%棉',
            ),
            156 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030002,
                'id' => 157,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '印度',
            ),
            157 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030002,
                'id' => 158,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 27729-2011',
            ),
            158 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030002,
                'id' => 159,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '160*230cm',
            ),
            159 => 
            array (
                'attribute' => '工艺',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030002,
                'id' => 160,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '手工枪刺',
            ),
            160 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030002,
                'id' => 161,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1：羊毛材质存在一点羊骚味实属正常情况，建议开窗通风，多散散味道即可。
2：羊毛地毯刚刚开始使用的时候多多少少都会有一点掉毛的情况，建议开始使用的时候用吸尘器多吸几次，之后掉毛的情况就会有改善。  
3：因为天然羊毛材质，所以脚感会有一点点刺，不属于产品质量问题。',
            ),
            161 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030003,
                'id' => 162,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '面纱： 100%羊毛  底纱： 88.3%棉   11.7%其他',
            ),
            162 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030003,
                'id' => 163,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '印度',
            ),
            163 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030003,
                'id' => 164,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'QB/T 2756-2005',
            ),
            164 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030003,
                'id' => 165,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '160*230cm',
            ),
            165 => 
            array (
                'attribute' => '工艺',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030003,
                'id' => 166,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '手工编织',
            ),
            166 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030003,
                'id' => 167,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1：羊毛材质存在一点羊骚味实属正常情况，建议开窗通风，多散散味道即可。
2：羊毛地毯刚刚开始使用的时候多多少少都会有一点掉毛的情况，建议开始使用的时候用吸尘器多吸几次，之后掉毛的情况就会有改善。  
3：因为天然羊毛材质，所以脚感会有一点点刺，不属于产品质量问题。',
            ),
            167 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030004,
                'id' => 168,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            168 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030004,
                'id' => 169,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22844-2009',
            ),
            169 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030004,
                'id' => 170,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
            ),
            170 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030004,
                'id' => 171,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国山东',
            ),
            171 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030004,
                'id' => 172,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '蓝色/ 灰色',
            ),
            172 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030004,
                'id' => 173,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
            ),
            173 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030005,
                'id' => 174,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%亚麻',
            ),
            174 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030005,
                'id' => 175,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22844-2009',
            ),
            175 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030005,
                'id' => 176,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国山东',
            ),
            176 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030005,
                'id' => 177,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '橙色/ 灰色/ 黄色',
            ),
            177 => 
            array (
                'attribute' => '工艺',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030005,
                'id' => 178,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '水洗工艺',
            ),
            178 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030005,
                'id' => 179,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
            ),
            179 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030005,
                'id' => 180,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
            ),
            180 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030006,
                'id' => 181,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            181 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030006,
                'id' => 182,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
            ),
            182 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030006,
                'id' => 183,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国山东',
            ),
            183 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030006,
                'id' => 184,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB18401-2010 B类',
            ),
            184 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030006,
                'id' => 185,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '红色/ 黄色/ 蓝色',
            ),
            185 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1030006,
                'id' => 186,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
            ),
            186 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1035006,
                'id' => 187,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            187 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1035006,
                'id' => 188,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国浙江',
            ),
            188 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1035006,
                'id' => 189,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '长61*宽43cm / 长86*宽53cm',
            ),
            189 => 
            array (
                'attribute' => '工艺',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1035006,
                'id' => 190,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '手工制作',
            ),
            190 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1035006,
                'id' => 191,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 26850-2011',
            ),
            191 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1035006,
                'id' => 192,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '纯棉材质在织造染色过程中，表面不可避免会产生微细的纤维浮绒，使用前清水漂洗1-2次，即可去掉浮绒。不属于产品质量问题。',
            ),
            192 => 
            array (
                'attribute' => '面料成分',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1036002,
                'id' => 193,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100% 棉',
            ),
            193 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1036002,
                'id' => 194,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100% 高山苦荞麦壳',
            ),
            194 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1036002,
                'id' => 195,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '74×48cm±1cm',
            ),
            195 => 
            array (
                'attribute' => '填充物重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1036002,
                'id' => 196,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '3KG',
            ),
            196 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1036002,
                'id' => 197,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.天然植物填充，遇梅雨季节需要干燥保存，如有少量飞虫产生，太阳下晒3小时即可去除。 
2.枕芯类商品受身高、体型、睡眠习惯不同，产生不同的使用体验，建议多试睡几款枕头，挑选最适合的进行使用。',
            ),
            197 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1036013,
                'id' => 198,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            198 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1036013,
                'id' => 199,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '150*200*25cm/ 180*200*25cm',
            ),
            199 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1036013,
                'id' => 200,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'FZ/T 62028-2015',
            ),
            200 => 
            array (
                'attribute' => '工艺',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1036013,
                'id' => 201,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '双捻工艺',
            ),
            201 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1036013,
                'id' => 202,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '浙江 江苏',
            ),
            202 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1036013,
                'id' => 203,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1：针织棉面料因为工艺不可避免原因，使用一段时间后会出现起毛起球现象，使用去毛机修理一下即可。
2：因为针织的编织工艺，成品在使用过程中会有轻微的变型，不影响使用。',
            ),
            203 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1036016,
                'id' => 204,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            204 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1036016,
                'id' => 205,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '150*200cm/ 180*200cm',
            ),
            205 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1036016,
                'id' => 206,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22797-2009',
            ),
            206 => 
            array (
                'attribute' => '工艺',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1036016,
                'id' => 207,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '色织水洗工艺',
            ),
            207 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1036016,
                'id' => 208,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
            ),
            208 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1037011,
                'id' => 209,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5/1.8m*2m*5cm',
            ),
            209 => 
            array (
                'attribute' => '外层面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1037011,
                'id' => 210,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%聚酯纤维',
            ),
            210 => 
            array (
                'attribute' => '里层面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1037011,
                'id' => 211,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%聚酯纤维',
            ),
            211 => 
            array (
                'attribute' => '内芯',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1037011,
                'id' => 212,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '聚氨酯',
            ),
            212 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1037011,
                'id' => 213,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.记忆绵产品为进口环保化学材质聚氨酯发泡而成，刚打开包装会有少量聚氨酯气体产生，拆除外套通风除味3-5天即可。
2.床垫商品受身高、体型、睡眠习惯不同，产生不同的使用体验，建议多试睡几款床垫，挑选最舒适的进行使用。',
            ),
            213 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1037012,
                'id' => 214,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%高山苦荞',
            ),
            214 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1037012,
                'id' => 215,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '40*8cm',
            ),
            215 => 
            array (
                'attribute' => '外用面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1037012,
                'id' => 216,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '45%麻45%棉10%聚酯纤维',
            ),
            216 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1037012,
                'id' => 217,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.天然植物填充，遇梅雨季节需要干燥保存，如有少量飞虫产生，太阳下晒3小时即可去除。
2.枕芯类商品受身高、体型、睡眠习惯不同，产生不同的使用体验，建议多试睡几款枕头，挑选最适合的进行使用。
3.建议每次使用时间控制在15分钟以内。',
            ),
            217 => 
            array (
                'attribute' => '商品重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1037012,
                'id' => 218,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '0.45kg+-0.05kg',
            ),
            218 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1039051,
                'id' => 219,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '33*24*14cm',
            ),
            219 => 
            array (
                'attribute' => '外层面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1039051,
                'id' => 220,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            220 => 
            array (
                'attribute' => '里层面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1039051,
                'id' => 221,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%聚酯纤维',
            ),
            221 => 
            array (
                'attribute' => '内芯',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1039051,
                'id' => 222,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '聚氨酯',
            ),
            222 => 
            array (
                'attribute' => '安全技术',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1039051,
                'id' => 223,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 18401-2010 B类',
            ),
            223 => 
            array (
                'attribute' => '*温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1039051,
                'id' => 224,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1,水洗时请将外套取下，用冷水洗涤后置于阴凉处阴干或烘干。不能同褪色衣物同洗，以防沾污、沾色。
2,外套洗后稍有缩水是正常现象，因是弹性织物，仅需四周拉一下长度即可。
3,记忆棉不可水洗，请经常保持产品干燥，定期通风（不可曝晒）。若不慎打湿，立即用干毛巾将水分吸干，置于通风处阴干或用冷吹风吹干即可。',
            ),
            224 => 
            array (
                'attribute' => '坐垫外层面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1043005,
                'id' => 225,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%聚酯纤维',
            ),
            225 => 
            array (
                'attribute' => '坐垫内芯材料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1043005,
                'id' => 226,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '聚氨酯',
            ),
            226 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1043005,
                'id' => 227,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T22843-2009',
            ),
            227 => 
            array (
                'attribute' => '方形尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1043005,
                'id' => 228,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '36*36*3cm',
            ),
            228 => 
            array (
                'attribute' => '圆形尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1043005,
                'id' => 229,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'Φ34*3cm',
            ),
            229 => 
            array (
                'attribute' => '坐垫套面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1043005,
                'id' => 230,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            230 => 
            array (
                'attribute' => '*温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1043005,
                'id' => 231,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1,水洗时请将外套取下，用冷水洗涤后置于阴凉处阴干或烘干。不能同褪色衣物同洗，以防沾污、沾色。
2,外套洗后稍有缩水是正常现象，因是弹性织物，仅需四周拉一下长度即可。
3,记忆棉不可水洗，请经常保持产品干燥，每隔一段时间用吸尘器清理内芯落尘或用手轻轻拍打内芯，放在通风阴凉处适当晾晒即可。。若不慎打湿，立即用干毛巾将水分吸干，置于通风处阴干或用冷吹风吹干即可。',
            ),
            231 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1044012,
                'id' => 232,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '150*200cm',
            ),
            232 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1044012,
                'id' => 233,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%羊毛',
            ),
            233 => 
            array (
                'attribute' => '产品等级',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1044012,
                'id' => 234,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '一等品',
            ),
            234 => 
            array (
                'attribute' => '安全及时',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1044012,
                'id' => 235,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 18401-2010 B类',
            ),
            235 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1044012,
                'id' => 236,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.羊毛毯采取传统机织工艺，纯天然织造的，直接接触皮肤会有轻微扎人。
2.初次使用时会有少量浮毛，建议干洗处理。
3.商品为纯羊毛织造而成，若有少量气味请通风2-3天去除。',
            ),
            236 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1046044,
                'id' => 237,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%美利奴羊毛',
            ),
            237 => 
            array (
                'attribute' => '重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1046044,
                'id' => 238,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1260g',
            ),
            238 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1046044,
                'id' => 239,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '150*200cm',
            ),
            239 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1046044,
                'id' => 240,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'FZ/T 61001-2006',
            ),
            240 => 
            array (
                'attribute' => '产品等级',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1046044,
                'id' => 241,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '一等品',
            ),
            241 => 
            array (
                'attribute' => '面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1048005,
                'id' => 242,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100% 棉',
            ),
            242 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1048005,
                'id' => 243,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '45*45cm',
            ),
            243 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1048005,
                'id' => 244,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国江苏',
            ),
            244 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1048005,
                'id' => 245,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '真朱红/ 薄缥蓝/ 枯野灰',
            ),
            245 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1048005,
                'id' => 246,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22843-2009',
            ),
            246 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1048005,
                'id' => 247,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
            ),
            247 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1055012,
                'id' => 248,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '外壳：100% 纯棉  内充：100% 聚酯纤维',
            ),
            248 => 
            array (
                'attribute' => '克重',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1055012,
                'id' => 249,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '600G/ 1400G',
            ),
            249 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1055012,
                'id' => 250,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '45*45cm / 66*66cm',
            ),
            250 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1055012,
                'id' => 251,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国江苏',
            ),
            251 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1055012,
                'id' => 252,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22843-2009',
            ),
            252 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1055016,
                'id' => 253,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '珍珠粉/ 宝石蓝',
            ),
            253 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1055016,
                'id' => 254,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '45*45cm',
            ),
            254 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1055016,
                'id' => 255,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '主面料：100% 棉
填充：100% 聚酯纤维',
            ),
            255 => 
            array (
                'attribute' => '克重',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1055016,
                'id' => 256,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '600G',
            ),
            256 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1055016,
                'id' => 257,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22843-2009',
            ),
            257 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1055016,
                'id' => 258,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
            ),
            258 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1057036,
                'id' => 259,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '45*45cm',
            ),
            259 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1057036,
                'id' => 260,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '灰紫/ 蓝色/ 灰色/ 咖色',
            ),
            260 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1057036,
                'id' => 261,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22843-2009',
            ),
            261 => 
            array (
                'attribute' => '填充克重',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1057036,
                'id' => 262,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '600G',
            ),
            262 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1057036,
                'id' => 263,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国江苏',
            ),
            263 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1057036,
                'id' => 264,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '面料：100% 亚麻
内芯面料：100%棉
填充：100%聚酯纤维',
            ),
            264 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1057036,
                'id' => 265,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
            ),
            265 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064000,
                'id' => 266,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '38*38*30cm/60*55*20cm',
            ),
            266 => 
            array (
                'attribute' => '产品标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064000,
                'id' => 267,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'FZ/T 62011.3-2008',
            ),
            267 => 
            array (
                'attribute' => '安全类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064000,
                'id' => 268,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 18401-2010 B类',
            ),
            268 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064000,
                'id' => 269,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '米色',
            ),
            269 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064002,
                'id' => 270,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '40R/60R',
            ),
            270 => 
            array (
                'attribute' => '产品标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064002,
                'id' => 271,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'FZ/T 62011.3-2008',
            ),
            271 => 
            array (
                'attribute' => '安全类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064002,
                'id' => 272,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 18401-2010 B类',
            ),
            272 => 
            array (
                'attribute' => '填充物重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064002,
                'id' => 273,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '110g',
            ),
            273 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064002,
                'id' => 274,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '蓝白',
            ),
            274 => 
            array (
                'attribute' => '产品标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064003,
                'id' => 275,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'FZ/T 62011.3-2008',
            ),
            275 => 
            array (
                'attribute' => '安全类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064003,
                'id' => 276,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 18401-2010 B类',
            ),
            276 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064003,
                'id' => 277,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '29*19cm',
            ),
            277 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064003,
                'id' => 278,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '藏青色',
            ),
            278 => 
            array (
                'attribute' => '产品标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064004,
                'id' => 279,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'FZ/T 62011.3-2008',
            ),
            279 => 
            array (
                'attribute' => '安全类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064004,
                'id' => 280,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 18401-2010 B类',
            ),
            280 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064004,
                'id' => 281,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '32*32*32cm',
            ),
            281 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064004,
                'id' => 282,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '牛仔条纹',
            ),
            282 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064006,
                'id' => 283,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '50x30x10-6cm',
            ),
            283 => 
            array (
                'attribute' => '重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064006,
                'id' => 284,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '0.87kg',
            ),
            284 => 
            array (
                'attribute' => '外层面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064006,
                'id' => 285,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '40%棉60%聚酯纤维（接触皮肤面全棉）',
            ),
            285 => 
            array (
                'attribute' => '里层面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064006,
                'id' => 286,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%聚酯纤维',
            ),
            286 => 
            array (
                'attribute' => '内芯',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064006,
                'id' => 287,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '聚氨酯',
            ),
            287 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064007,
                'id' => 288,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '135x36x10-7cm',
            ),
            288 => 
            array (
                'attribute' => '重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064007,
                'id' => 289,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '2.3kg',
            ),
            289 => 
            array (
                'attribute' => '外层面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064007,
                'id' => 290,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '40%棉60%聚酯纤维（接触皮肤面全棉）',
            ),
            290 => 
            array (
                'attribute' => '里层面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064007,
                'id' => 291,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%聚酯纤维',
            ),
            291 => 
            array (
                'attribute' => '内芯',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064007,
                'id' => 292,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '聚氨酯',
            ),
            292 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064021,
                'id' => 293,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '本白',
            ),
            293 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064021,
                'id' => 294,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 7000.11-2008',
            ),
            294 => 
            array (
                'attribute' => '额定电压',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064021,
                'id' => 295,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '220-240V',
            ),
            295 => 
            array (
                'attribute' => '型号',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064021,
                'id' => 296,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'T710',
            ),
            296 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064021,
                'id' => 297,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '本产品不包含灯泡',
            ),
            297 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064021,
                'id' => 298,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国中山',
            ),
            298 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064022,
                'id' => 299,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '本白',
            ),
            299 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064022,
                'id' => 300,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 7000.11-2008',
            ),
            300 => 
            array (
                'attribute' => '型号',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064022,
                'id' => 301,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'F710',
            ),
            301 => 
            array (
                'attribute' => '额定电压',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064022,
                'id' => 302,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '220-240V',
            ),
            302 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064022,
                'id' => 303,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '本产品不包含灯泡',
            ),
            303 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1064022,
                'id' => 304,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国中山',
            ),
            304 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1065004,
                'id' => 305,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '150*30cm',
            ),
            305 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1065004,
                'id' => 306,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '原木色/ 棕色',
            ),
            306 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1065004,
                'id' => 307,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 23148-2008',
            ),
            307 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1065004,
                'id' => 308,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国苏州',
            ),
            308 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1065004,
                'id' => 309,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '原木色为水曲柳贴皮，棕色为胡桃木贴皮。',
            ),
            309 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1065005,
                'id' => 310,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '150*28cm',
            ),
            310 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1065005,
                'id' => 311,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '棕色',
            ),
            311 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1065005,
                'id' => 312,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 23148-2008',
            ),
            312 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1065005,
                'id' => 313,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国江苏',
            ),
            313 => 
            array (
                'attribute' => '填充物重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1068010,
                'id' => 314,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1300g/1560g',
            ),
            314 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1068010,
                'id' => 315,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5*2m/1.8*2m',
            ),
            315 => 
            array (
                'attribute' => '外层面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1068010,
                'id' => 316,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            316 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1068010,
                'id' => 317,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%羊毛',
            ),
            317 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1068010,
                'id' => 318,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22843-2009',
            ),
            318 => 
            array (
                'attribute' => '产品等级',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1068010,
                'id' => 319,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '合格品',
            ),
            319 => 
            array (
                'attribute' => '厚度',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1068010,
                'id' => 320,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '3cm+-视商品干燥情况有少量浮动',
            ),
            320 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1068011,
                'id' => 321,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '60%、90%驼绒/40%、10%驼毛',
            ),
            321 => 
            array (
                'attribute' => '面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1068011,
                'id' => 322,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            322 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1068011,
                'id' => 323,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '200*230cm',
            ),
            323 => 
            array (
                'attribute' => '填充物重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1068011,
                'id' => 324,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '2000g',
            ),
            324 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1068012,
                'id' => 325,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
            ),
            325 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1068012,
                'id' => 326,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '灰紫/ 浅咖色',
            ),
            326 => 
            array (
                'attribute' => '印染工艺',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1068012,
                'id' => 327,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '色织工艺',
            ),
            327 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1068012,
                'id' => 328,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22844-2009',
            ),
            328 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1068012,
                'id' => 329,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。 严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
            ),
            329 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1068012,
                'id' => 330,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国山东',
            ),
            330 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1068012,
                'id' => 331,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '面料：100%棉  填充物：65% 棉/ 35%聚酯纤维',
            ),
            331 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1071004,
                'id' => 332,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '48*38*13cm',
            ),
            332 => 
            array (
                'attribute' => '配色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1071004,
                'id' => 333,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '黑红/白姜黄',
            ),
            333 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1071004,
                'id' => 334,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '聚丙烯树脂',
            ),
            334 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1071004,
                'id' => 335,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 9688-1988',
            ),
            335 => 
            array (
                'attribute' => '产品等级',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1071004,
                'id' => 336,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '合格品',
            ),
            336 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1071005,
                'id' => 337,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '185*160*100MM',
            ),
            337 => 
            array (
                'attribute' => '材料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1071005,
                'id' => 338,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '聚丙烯树脂',
            ),
            338 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1071005,
                'id' => 339,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 9688-1988',
            ),
            339 => 
            array (
                'attribute' => '产品等级',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1071005,
                'id' => 340,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '合格品',
            ),
            340 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1071006,
                'id' => 341,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '200*60mm',
            ),
            341 => 
            array (
                'attribute' => '材料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1071006,
                'id' => 342,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '聚丙烯树脂',
            ),
            342 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1071006,
                'id' => 343,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 9688-1988',
            ),
            343 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1072000,
                'id' => 344,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '象牙白/ 芥子黄/ 银铅色',
            ),
            344 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1072000,
                'id' => 345,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '45*45cm/ 66*66cm',
            ),
            345 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1072000,
                'id' => 346,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22843-2009',
            ),
            346 => 
            array (
                'attribute' => '工艺',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1072000,
                'id' => 347,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '手工编织',
            ),
            347 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1072000,
                'id' => 348,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国山东',
            ),
            348 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1072000,
                'id' => 349,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '此产品不含抱枕芯',
            ),
            349 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1072001,
                'id' => 350,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '缥蓝色/ 薄灰色/ 象牙色/ 赤紫色',
            ),
            350 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1072001,
                'id' => 351,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '45*45cm',
            ),
            351 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1072001,
                'id' => 352,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22843-2009',
            ),
            352 => 
            array (
                'attribute' => '工艺',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1072001,
                'id' => 353,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '色织水洗',
            ),
            353 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1072001,
                'id' => 354,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国山东',
            ),
            354 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1072001,
                'id' => 355,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '此产品不含抱枕芯',
            ),
            355 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1075023,
                'id' => 356,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '48*74cm',
            ),
            356 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1075023,
                'id' => 357,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '20%白鸭绒+80%白鹅毛片',
            ),
            357 => 
            array (
                'attribute' => '填充物重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1075023,
                'id' => 358,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '200g白鸭绒+800g白鹅毛片',
            ),
            358 => 
            array (
                'attribute' => '面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1075023,
                'id' => 359,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            359 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1075023,
                'id' => 360,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'QB/T 1194-2012',
            ),
            360 => 
            array (
                'attribute' => '填充成分',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1075024,
                'id' => 361,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '白鹅绒',
            ),
            361 => 
            array (
                'attribute' => '含绒量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1075024,
                'id' => 362,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '95%',
            ),
            362 => 
            array (
                'attribute' => '面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1075024,
                'id' => 363,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%纯棉',
            ),
            363 => 
            array (
                'attribute' => '面料参数',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1075024,
                'id' => 364,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '120支 500根',
            ),
            364 => 
            array (
                'attribute' => '填充物重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1075024,
                'id' => 365,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1500g/1700g',
            ),
            365 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1075024,
                'id' => 366,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '200*230cm/220*240cm',
            ),
            366 => 
            array (
                'attribute' => '工艺',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1075024,
                'id' => 367,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '双层立衬',
            ),
            367 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1081000,
                'id' => 368,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '35*45cm',
            ),
            368 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1081000,
                'id' => 369,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22843-2009',
            ),
            369 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1081000,
                'id' => 370,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '浙江杭州',
            ),
            370 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1081000,
                'id' => 371,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100% 聚酯纤维',
            ),
            371 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1081002,
                'id' => 372,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '45*45cm',
            ),
            372 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1081002,
                'id' => 373,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22843-2009',
            ),
            373 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1081002,
                'id' => 374,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100% 聚酯纤维',
            ),
            374 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1081002,
                'id' => 375,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '浙江杭州',
            ),
            375 => 
            array (
                'attribute' => '鲜花',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1083009,
                'id' => 376,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '厄瓜多尔玫瑰',
            ),
            376 => 
            array (
                'attribute' => '朵数',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1083009,
                'id' => 377,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1朵',
            ),
            377 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1083009,
                'id' => 378,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '妖姬蓝',
            ),
            378 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1083009,
                'id' => 379,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '17*17*12cm',
            ),
            379 => 
            array (
                'attribute' => '花材种植地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1083009,
                'id' => 380,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '厄瓜多尔',
            ),
            380 => 
            array (
                'attribute' => '鲜花主材',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1083010,
                'id' => 381,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '奥斯汀玫瑰、泉水玫瑰、绣球',
            ),
            381 => 
            array (
                'attribute' => '鲜花辅材',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1083010,
                'id' => 382,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '棉毛苏叶、细爪草、褐色果、满天星',
            ),
            382 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1083010,
                'id' => 383,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '柔情粉',
            ),
            383 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1083010,
                'id' => 384,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '17*17*12cm',
            ),
            384 => 
            array (
                'attribute' => '花材种植地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1083010,
                'id' => 385,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '日本',
            ),
            385 => 
            array (
                'attribute' => '*温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1083010,
                'id' => 386,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '由于花材的季节性供应特点，个别配材会有所调整，且因花材批次不同会有一定微小色差，不会影响整体花盒效果。',
            ),
            386 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1084001,
                'id' => 387,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%纯棉',
            ),
            387 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1084001,
                'id' => 388,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '150*200cm',
            ),
            388 => 
            array (
                'attribute' => '产品标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1084001,
                'id' => 389,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'FZ/T 61001-2006',
            ),
            389 => 
            array (
                'attribute' => '安全技术',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1084001,
                'id' => 390,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB18401-2010 B类',
            ),
            390 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1084001,
                'id' => 391,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.纯棉毯采取传统针织工艺，纯天然织造的，使用前建议清洗一遍去除少量浮尘。
2.商品为纯棉织造而成，若有少量气味请通风2-3天去除。
3.纯棉针织盖毯清洗数次之后，可能存在微量变形，建议干洗。',
            ),
            391 => 
            array (
                'attribute' => '重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1084001,
                'id' => 392,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1280g',
            ),
            392 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1084003,
                'id' => 393,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            393 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1084003,
                'id' => 394,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '150*200cm',
            ),
            394 => 
            array (
                'attribute' => '产品标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1084003,
                'id' => 395,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'FZ/T 61001-2006',
            ),
            395 => 
            array (
                'attribute' => '安全技术',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1084003,
                'id' => 396,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB18401-2010 B类',
            ),
            396 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1084003,
                'id' => 397,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.纯棉毯采取传统针织工艺，纯天然织造的，使用前建议清洗一遍去除少量浮尘。
2.商品为纯棉织造而成，若有少量气味请通风2-3天去除。
3.纯棉针织盖毯清洗数次之后，可能存在微量变形，建议干洗。',
            ),
            397 => 
            array (
                'attribute' => '重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1084003,
                'id' => 398,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1115g',
            ),
            398 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1086015,
                'id' => 399,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '本白/ 哑黑/ 姜黄',
            ),
            399 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1086015,
                'id' => 400,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 7000.11-2008',
            ),
            400 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1086015,
                'id' => 401,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国广东',
            ),
            401 => 
            array (
                'attribute' => '型号',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1086015,
                'id' => 402,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'MT20290-1-130',
            ),
            402 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1086015,
                'id' => 403,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '本产品不含灯泡',
            ),
            403 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1086023,
                'id' => 404,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%聚酯纤维',
            ),
            404 => 
            array (
                'attribute' => '搭扣',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1086023,
                'id' => 405,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '锌合金',
            ),
            405 => 
            array (
                'attribute' => '拉带规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1086023,
                'id' => 406,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '120cm',
            ),
            406 => 
            array (
                'attribute' => '颈圈规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1086023,
                'id' => 407,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '30-45cm',
            ),
            407 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1086024,
                'id' => 408,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%锦纶',
            ),
            408 => 
            array (
                'attribute' => '搭扣',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1086024,
                'id' => 409,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '锌合金',
            ),
            409 => 
            array (
                'attribute' => '颈圈',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1086024,
                'id' => 410,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '30-45cm',
            ),
            410 => 
            array (
                'attribute' => '拉带',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1086024,
                'id' => 411,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '120cm',
            ),
            411 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1086025,
                'id' => 412,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%锦纶',
            ),
            412 => 
            array (
                'attribute' => '搭扣',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1086025,
                'id' => 413,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '锌合金',
            ),
            413 => 
            array (
                'attribute' => '拉带规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1086025,
                'id' => 414,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '120cm',
            ),
            414 => 
            array (
                'attribute' => '产品标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1086025,
                'id' => 415,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'FZ/T 63005-2010',
            ),
            415 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1086026,
                'id' => 416,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%锦纶',
            ),
            416 => 
            array (
                'attribute' => '搭扣',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1086026,
                'id' => 417,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '锌合金',
            ),
            417 => 
            array (
                'attribute' => '颈圈尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1086026,
                'id' => 418,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '30-45cm',
            ),
            418 => 
            array (
                'attribute' => '拉带尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1086026,
                'id' => 419,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '120cm',
            ),
            419 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1090004,
                'id' => 420,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床笠：150*200*25cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床笠：180*200*25cm',
            ),
            420 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1090004,
                'id' => 421,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '红色格子/ 蓝色格子/ 绿色格子/ 灰色格子',
            ),
            421 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1090004,
                'id' => 422,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22844-2009',
            ),
            422 => 
            array (
                'attribute' => '工艺',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1090004,
                'id' => 423,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '色织工艺',
            ),
            423 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1090004,
                'id' => 424,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1：纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。 严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。
2：不同批次面料和拉链稍有差异，请以实物为准。',
            ),
            424 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1092024,
                'id' => 425,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '200*230cm',
            ),
            425 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1092024,
                'id' => 426,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%桑蚕丝',
            ),
            426 => 
            array (
                'attribute' => '填充物重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1092024,
                'id' => 427,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1500g',
            ),
            427 => 
            array (
                'attribute' => '外套',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1092024,
                'id' => 428,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%纯棉纱布',
            ),
            428 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1092024,
                'id' => 429,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 24252-2009',
            ),
            429 => 
            array (
                'attribute' => '安全技术类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1092024,
                'id' => 430,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 18401-2010 B类',
            ),
            430 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1092038,
                'id' => 431,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '470*128*13mm',
            ),
            431 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1092038,
                'id' => 432,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '天然桐木',
            ),
            432 => 
            array (
                'attribute' => '重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1092038,
                'id' => 433,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '200g',
            ),
            433 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1092038,
                'id' => 434,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 28495-2012',
            ),
            434 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1092039,
                'id' => 435,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '385mmX385mmX135mm',
            ),
            435 => 
            array (
                'attribute' => '重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1092039,
                'id' => 436,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '950g',
            ),
            436 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1092039,
                'id' => 437,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '美卡瓦楞纸板',
            ),
            437 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1092039,
                'id' => 438,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '本色',
            ),
            438 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1093000,
                'id' => 439,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'PU+PE（枝干）',
            ),
            439 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1093000,
                'id' => 440,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '白色',
            ),
            440 => 
            array (
                'attribute' => '长度',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1093000,
                'id' => 441,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '81cm',
            ),
            441 => 
            array (
                'attribute' => '花草种类',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1093000,
                'id' => 442,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '木棉花',
            ),
            442 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1093001,
                'id' => 443,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'PU+PE（枝干）',
            ),
            443 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1093001,
                'id' => 444,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '白色',
            ),
            444 => 
            array (
                'attribute' => '长度',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1093001,
                'id' => 445,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '35cm',
            ),
            445 => 
            array (
                'attribute' => '花草种类',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1093001,
                'id' => 446,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '马蹄莲',
            ),
            446 => 
            array (
                'attribute' => '数量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1093001,
                'id' => 447,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '一束（9朵）',
            ),
            447 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1093002,
                'id' => 448,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'PU+玻璃',
            ),
            448 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1093002,
                'id' => 449,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '白色',
            ),
            449 => 
            array (
                'attribute' => '长度',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1093002,
                'id' => 450,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '33cm',
            ),
            450 => 
            array (
                'attribute' => '花草种类',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1093002,
                'id' => 451,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '木棉花',
            ),
            451 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097004,
                'id' => 452,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '北美白橡木',
            ),
            452 => 
            array (
                'attribute' => '涂漆',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097004,
                'id' => 453,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '环保涂漆',
            ),
            453 => 
            array (
                'attribute' => '产品尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097004,
                'id' => 454,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1400/1600*820*750mm',
            ),
            454 => 
            array (
                'attribute' => '安装方式',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097004,
                'id' => 455,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '需要组装',
            ),
            455 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097005,
                'id' => 456,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '北美白橡木',
            ),
            456 => 
            array (
                'attribute' => '涂漆',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097005,
                'id' => 457,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '环保涂漆',
            ),
            457 => 
            array (
                'attribute' => '产品尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097005,
                'id' => 458,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '430*520*870mm',
            ),
            458 => 
            array (
                'attribute' => '安装方式',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097005,
                'id' => 459,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '无需组装',
            ),
            459 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097006,
                'id' => 460,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '北美白橡木',
            ),
            460 => 
            array (
                'attribute' => '涂漆',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097006,
                'id' => 461,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '环保涂漆',
            ),
            461 => 
            array (
                'attribute' => '产品尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097006,
                'id' => 462,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '600*600*550mm',
            ),
            462 => 
            array (
                'attribute' => '安装方式',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097006,
                'id' => 463,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '需要组装',
            ),
            463 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097007,
                'id' => 464,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '北美白橡木',
            ),
            464 => 
            array (
                'attribute' => '涂漆',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097007,
                'id' => 465,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '环保涂漆',
            ),
            465 => 
            array (
                'attribute' => '产品尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097007,
                'id' => 466,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '600*600*530/650mm',
            ),
            466 => 
            array (
                'attribute' => '安装方式',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097007,
                'id' => 467,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '需要组装',
            ),
            467 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097009,
                'id' => 468,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '北美白橡木+抽屉背板桐木',
            ),
            468 => 
            array (
                'attribute' => '涂漆',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097009,
                'id' => 469,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '环保涂漆',
            ),
            469 => 
            array (
                'attribute' => '产品尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097009,
                'id' => 470,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1000/1200*580*910mm',
            ),
            470 => 
            array (
                'attribute' => '安装方式',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097009,
                'id' => 471,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '需要组装',
            ),
            471 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097011,
                'id' => 472,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '北美白橡木+床铺板松木',
            ),
            472 => 
            array (
                'attribute' => '涂漆',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097011,
                'id' => 473,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '环保涂漆',
            ),
            473 => 
            array (
                'attribute' => '产品尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097011,
                'id' => 474,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '2065*2188*1088mm',
            ),
            474 => 
            array (
                'attribute' => '安装方式',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097011,
                'id' => 475,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '需要组装',
            ),
            475 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097012,
                'id' => 476,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '北美白橡木+抽屉背板桐木',
            ),
            476 => 
            array (
                'attribute' => '涂漆',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097012,
                'id' => 477,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '环保涂漆',
            ),
            477 => 
            array (
                'attribute' => '产品尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097012,
                'id' => 478,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '480*400*550mm',
            ),
            478 => 
            array (
                'attribute' => '安装方式',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097012,
                'id' => 479,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '需要组装',
            ),
            479 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097013,
                'id' => 480,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '北美白橡木+抽屉背板桐木',
            ),
            480 => 
            array (
                'attribute' => '涂漆',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097013,
                'id' => 481,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '环保涂漆',
            ),
            481 => 
            array (
                'attribute' => '产品尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097013,
                'id' => 482,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '800*430*1100mm',
            ),
            482 => 
            array (
                'attribute' => '安装方式',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097013,
                'id' => 483,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '需要组装',
            ),
            483 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097014,
                'id' => 484,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '北美白橡木+抽屉背板桐木',
            ),
            484 => 
            array (
                'attribute' => '涂漆',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097014,
                'id' => 485,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '环保涂漆',
            ),
            485 => 
            array (
                'attribute' => '产品尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097014,
                'id' => 486,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '860*400*1200mm',
            ),
            486 => 
            array (
                'attribute' => '安装方式',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097014,
                'id' => 487,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '需要组装',
            ),
            487 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097016,
                'id' => 488,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '北美白橡木+抽屉背板桐木',
            ),
            488 => 
            array (
                'attribute' => '涂漆',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097016,
                'id' => 489,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '环保涂漆',
            ),
            489 => 
            array (
                'attribute' => '产品尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097016,
                'id' => 490,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1800*450*525mm',
            ),
            490 => 
            array (
                'attribute' => '安装方式',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097016,
                'id' => 491,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '需要组装',
            ),
            491 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097017,
                'id' => 492,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '北美白橡木+抽屉背板桐木',
            ),
            492 => 
            array (
                'attribute' => '涂漆',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097017,
                'id' => 493,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '环保涂漆',
            ),
            493 => 
            array (
                'attribute' => '产品尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097017,
                'id' => 494,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1200*600*450mm',
            ),
            494 => 
            array (
                'attribute' => '安装方式',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1097017,
                'id' => 495,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '需要组装',
            ),
            495 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1100000,
                'id' => 496,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100% 棉',
            ),
            496 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1100000,
                'id' => 497,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22796-2009',
            ),
            497 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1100000,
                'id' => 498,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '石板灰/ 烟褐色',
            ),
            498 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1100000,
                'id' => 499,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '48*74cm',
            ),
            499 => 
            array (
                'attribute' => '工艺',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1100000,
                'id' => 500,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '水洗工艺',
            ),
        ));
        \DB::table('goods_attribute')->insert(array (
            0 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1100000,
                'id' => 501,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国江苏',
            ),
            1 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1100000,
                'id' => 502,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
            ),
            2 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1100001,
                'id' => 503,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100% 棉',
            ),
            3 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1100001,
                'id' => 504,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22797-2009',
            ),
            4 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1100001,
                'id' => 505,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '石板灰/ 烟褐色',
            ),
            5 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1100001,
                'id' => 506,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '245*250cm/ 245*270cm',
            ),
            6 => 
            array (
                'attribute' => '工艺',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1100001,
                'id' => 507,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '水洗工艺',
            ),
            7 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1100001,
                'id' => 508,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国江苏',
            ),
            8 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1100001,
                'id' => 509,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
            ),
            9 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1100002,
                'id' => 510,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            10 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1100002,
                'id' => 511,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22797-2009',
            ),
            11 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1100002,
                'id' => 512,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '150*200*25cm/ 180*200*25cm',
            ),
            12 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1100002,
                'id' => 513,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '石板灰/ 烟褐色',
            ),
            13 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1100002,
                'id' => 514,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国江苏',
            ),
            14 => 
            array (
                'attribute' => '工艺',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1100002,
                'id' => 515,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '水洗工艺',
            ),
            15 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1100002,
                'id' => 516,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
            ),
            16 => 
            array (
                'attribute' => '规格尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1108029,
                'id' => 517,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '290*260*380mm',
            ),
            17 => 
            array (
                'attribute' => '材料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1108029,
                'id' => 518,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '美耐皿树脂
硅胶
201不锈钢（奥氏体型）',
            ),
            18 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1108029,
                'id' => 519,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 9684-2011',
            ),
            19 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1108030,
                'id' => 520,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '177*88*51mm',
            ),
            20 => 
            array (
                'attribute' => '材料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1108030,
                'id' => 521,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '美耐皿树脂、聚碳酸酯（pc）',
            ),
            21 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1108030,
                'id' => 522,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'QB 1999-1994',
            ),
            22 => 
            array (
                'attribute' => '规格尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1108031,
                'id' => 523,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'S 145*133*75mm
M 187.4*172.5*97.4mm
L 232*213*122.2mm',
            ),
            23 => 
            array (
                'attribute' => '材料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1108031,
                'id' => 524,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '美耐皿树脂、201不锈钢（奥氏体型）',
            ),
            24 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1108031,
                'id' => 525,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 9684-2011',
            ),
            25 => 
            array (
                'attribute' => '规格尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1108032,
                'id' => 526,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'S 128*88*55mm
M 150*100*72mm',
            ),
            26 => 
            array (
                'attribute' => '材料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1108032,
                'id' => 527,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '硅胶',
            ),
            27 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1108032,
                'id' => 528,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 4806.1-1994',
            ),
            28 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1109004,
                'id' => 529,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '10寸/12寸',
            ),
            29 => 
            array (
                'attribute' => '机芯',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1109004,
                'id' => 530,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '太阳机芯',
            ),
            30 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1109004,
                'id' => 531,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '水柳木/胡桃木',
            ),
            31 => 
            array (
                'attribute' => '能源',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1109004,
                'id' => 532,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '5号电池*1（本产品不含电池）',
            ),
            32 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1109005,
                'id' => 533,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '榉木',
            ),
            33 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1109005,
                'id' => 534,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '12*4.5*12cm',
            ),
            34 => 
            array (
                'attribute' => '机芯类型',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1109005,
                'id' => 535,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '扫秒机芯',
            ),
            35 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1109005,
                'id' => 536,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '原木色',
            ),
            36 => 
            array (
                'attribute' => '能源',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1109005,
                'id' => 537,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '5号电池*1',
            ),
            37 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1109008,
                'id' => 538,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '颗粒海绵',
            ),
            38 => 
            array (
                'attribute' => '框架材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1109008,
                'id' => 539,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '国际标准钢管',
            ),
            39 => 
            array (
                'attribute' => '面料成分',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1109008,
                'id' => 540,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '15%亚麻+85%涤',
            ),
            40 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1109008,
                'id' => 541,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '米白色',
            ),
            41 => 
            array (
                'attribute' => '是否组装',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1109008,
                'id' => 542,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '组装【沙发脚】',
            ),
            42 => 
            array (
                'attribute' => '产品尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1109008,
                'id' => 543,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '2P:1300*930*930mm;   1P:680*930*930mm;    0.5P:670*450*380mm',
            ),
            43 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1109034,
                'id' => 544,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '象牙白',
            ),
            44 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1109034,
                'id' => 545,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T22779-2008',
            ),
            45 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1109034,
                'id' => 546,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '9.8 x 3.05 x 5.8cm',
            ),
            46 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110002,
                'id' => 547,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'ABS树脂+PP树脂',
            ),
            47 => 
            array (
                'attribute' => 'USB线长',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110002,
                'id' => 548,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '约1m',
            ),
            48 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110002,
                'id' => 549,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '102mm*130mm*85mm',
            ),
            49 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110002,
                'id' => 550,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '本白/冷灰/樱花粉/静谧蓝',
            ),
            50 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110003,
                'id' => 551,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100% 棉',
            ),
            51 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110003,
                'id' => 552,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品（床笠款）： 被套 200*230cm/ 枕套：48*74cm*2/ 床笠：150*200*28cm
1.8米床品（床笠款）：被套 220*240cm/ 枕套：48*74cm*2/ 床笠：180*200*28cm
1.5米床品（床单款）： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品（床单款）：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
            ),
            52 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110003,
                'id' => 553,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T22844-2009',
            ),
            53 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110003,
                'id' => 554,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '烟草绿/ 木兰黄/ 深茶褐/ 丁子灰',
            ),
            54 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110003,
                'id' => 555,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国江苏',
            ),
            55 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110004,
                'id' => 556,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            56 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110004,
                'id' => 557,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品（床笠款）： 被套 200*230cm/ 枕套：48*74cm*2/ 床笠：150*200*28cm
1.8米床品（床笠款）：被套 220*240cm/ 枕套：48*74cm*2/ 床笠：180*200*28cm
1.5米床品（床单款）： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品（床单款）：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
            ),
            57 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110004,
                'id' => 558,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T22844-2009',
            ),
            58 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110004,
                'id' => 559,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '烟草绿/ 深茶褐/ 丁子灰/ 木兰黄/ 茶香粉',
            ),
            59 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110004,
                'id' => 560,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国江苏',
            ),
            60 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110007,
                'id' => 561,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100% 棉',
            ),
            61 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110007,
                'id' => 562,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床笠：150*200*28cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床笠：180*200*28cm',
            ),
            62 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110007,
                'id' => 563,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22844-2009',
            ),
            63 => 
            array (
                'attribute' => '印染工艺',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110007,
                'id' => 564,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '色织工艺',
            ),
            64 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110007,
                'id' => 565,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '松柏绿/ 枯茶褐/ 灰白/ 石竹咖',
            ),
            65 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110007,
                'id' => 566,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国江苏',
            ),
            66 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110008,
                'id' => 567,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100% 棉',
            ),
            67 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110008,
                'id' => 568,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5M床：245*250cm
1.8M床：245*270cm',
            ),
            68 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110008,
                'id' => 569,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '天蓝色/ 烟草色/ 茶香粉/ 蜜橙/ 千岁绿/ 荧光绿/ 青蓝/ 伽罗色',
            ),
            69 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110008,
                'id' => 570,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 18401-2009 B类',
            ),
            70 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110008,
                'id' => 571,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国江苏',
            ),
            71 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110013,
                'id' => 572,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'S号 最长拉伸2.5m
M号 最长拉伸4m',
            ),
            72 => 
            array (
                'attribute' => '承重范围',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110013,
                'id' => 573,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 's  15公斤以下
m  30公斤以下',
            ),
            73 => 
            array (
                'attribute' => '材料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110013,
                'id' => 574,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '塑胶（ABS TPR）
耐拉反光涤纶带
锌合金钩',
            ),
            74 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110013,
                'id' => 575,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'Q/PM002-2016',
            ),
            75 => 
            array (
                'attribute' => '安全类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110013,
                'id' => 576,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '符合RoHs六项检测',
            ),
            76 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110014,
                'id' => 577,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'S号 最长拉绳2.5m
M号 最长拉伸4m',
            ),
            77 => 
            array (
                'attribute' => '承重范围',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110014,
                'id' => 578,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '15-30kg',
            ),
            78 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110014,
                'id' => 579,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '塑胶（ABS TPR）
耐拉反光涤纶带
锌合金钩',
            ),
            79 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110014,
                'id' => 580,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '日式木纹色',
            ),
            80 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110014,
                'id' => 581,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'Q/PM002-2016',
            ),
            81 => 
            array (
                'attribute' => '安全类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110014,
                'id' => 582,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '符合RoHs六项检测',
            ),
            82 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110015,
                'id' => 583,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'S号 最长拉绳2.5M',
            ),
            83 => 
            array (
                'attribute' => '承重范围',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110015,
                'id' => 584,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'S 10-15kg
M 15-30KG',
            ),
            84 => 
            array (
                'attribute' => '材料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110015,
                'id' => 585,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '塑胶（ABS TPR）
高强耐拉反光涤纶带
锌合金钩',
            ),
            85 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110015,
                'id' => 586,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '迷彩',
            ),
            86 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110015,
                'id' => 587,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'Q/PM002-2016',
            ),
            87 => 
            array (
                'attribute' => '安全类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110015,
                'id' => 588,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '符合RoHs六项检测',
            ),
            88 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110016,
                'id' => 589,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '188*98*30MM',
            ),
            89 => 
            array (
                'attribute' => '材料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110016,
                'id' => 590,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '塑胶（ABS PVC）硅胶',
            ),
            90 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110016,
                'id' => 591,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '蓝色/粉色',
            ),
            91 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110016,
                'id' => 592,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'Q/PM001-2016',
            ),
            92 => 
            array (
                'attribute' => '安全类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110016,
                'id' => 593,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '符合RoHs六项检测',
            ),
            93 => 
            array (
                'attribute' => '产品等级',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110016,
                'id' => 594,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '合格品',
            ),
            94 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110016,
                'id' => 595,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '因宠物模特选择范围有限，故让小萨出镜，其实这款更适合猫咪和小狗用哦。',
            ),
            95 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110017,
                'id' => 596,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '小剪刀*1+中号理毛梳*1+针梳*1',
            ),
            96 => 
            array (
                'attribute' => '材料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110017,
                'id' => 597,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '合金钢、不锈钢针、塑胶（PP TPR）',
            ),
            97 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110017,
                'id' => 598,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '白黑',
            ),
            98 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110017,
                'id' => 599,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'Q/PM001-2016
Q/PM003-2016',
            ),
            99 => 
            array (
                'attribute' => '安全类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110017,
                'id' => 600,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '符合RoHs六项检测',
            ),
            100 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110018,
                'id' => 601,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '大剪刀*1+大号钢针梳*1+双排针梳*1',
            ),
            101 => 
            array (
                'attribute' => '材料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110018,
                'id' => 602,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '合金钢、不锈钢针、塑胶（PP TPR）',
            ),
            102 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110018,
                'id' => 603,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '白黑',
            ),
            103 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110018,
                'id' => 604,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'Q/PM001-2016
Q/PM003-2016',
            ),
            104 => 
            array (
                'attribute' => '安全类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110018,
                'id' => 605,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '符合RoHs六项检测',
            ),
            105 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110019,
                'id' => 606,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '宠物安全指甲剪+指甲锉',
            ),
            106 => 
            array (
                'attribute' => '材料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110019,
                'id' => 607,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '合金钢 
塑胶（TPR）',
            ),
            107 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110019,
                'id' => 608,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'Q/PM003-2016',
            ),
            108 => 
            array (
                'attribute' => '安全类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1110019,
                'id' => 609,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '符合RoHs六项检测',
            ),
            109 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1115023,
                'id' => 610,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '200*230cm',
            ),
            110 => 
            array (
                'attribute' => '填充物重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1115023,
                'id' => 611,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1500g',
            ),
            111 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1115023,
                'id' => 612,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 24252-2009',
            ),
            112 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1115023,
                'id' => 613,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%桑蚕丝',
            ),
            113 => 
            array (
                'attribute' => '外套',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1115023,
                'id' => 614,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%纯棉纱布',
            ),
            114 => 
            array (
                'attribute' => '安全技术类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1115023,
                'id' => 615,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 18401-2010 B类',
            ),
            115 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1115028,
                'id' => 616,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100% 棉',
            ),
            116 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1115028,
                'id' => 617,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床笠：150*200*28cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床笠：180*200*28cm',
            ),
            117 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1115028,
                'id' => 618,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22844-2009',
            ),
            118 => 
            array (
                'attribute' => '印染工艺',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1115028,
                'id' => 619,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '色织工艺',
            ),
            119 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1115028,
                'id' => 620,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '黑茶条纹/ 若绿条纹/ 缥蓝条纹/ 素麻条纹',
            ),
            120 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1115028,
                'id' => 621,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国江苏',
            ),
            121 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1115052,
                'id' => 622,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '直径50cm*高5cm',
            ),
            122 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1115052,
                'id' => 623,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '席面：蔺草/ 包边：65%聚酯纤维 35%棉 / 内芯：EPE',
            ),
            123 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1115052,
                'id' => 624,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'QB/T 2934-2008',
            ),
            124 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1115052,
                'id' => 625,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国浙江',
            ),
            125 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1115053,
                'id' => 626,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米草席： 草席：150*195cm/ 枕套：48*74cm*2
1.8米草席：草席：180*200cm/ 枕套：枕套：48*74cm*2',
            ),
            126 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1115053,
                'id' => 627,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '席面：蔺草/  枕套面：蔺草/ 包边：65% 聚酯纤维  35% 棉/ 枕套背面：100% 聚酯纤维',
            ),
            127 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1115053,
                'id' => 628,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'QB/T 2934-2008',
            ),
            128 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1115053,
                'id' => 629,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国浙江',
            ),
            129 => 
            array (
                'attribute' => '花材',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116030,
                'id' => 630,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '厄瓜多尔玫瑰',
            ),
            130 => 
            array (
                'attribute' => '附加功能',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116030,
                'id' => 631,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '音乐盒',
            ),
            131 => 
            array (
                'attribute' => '产品尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116030,
                'id' => 632,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '直径10.5cm*高17cm',
            ),
            132 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116030,
                'id' => 633,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '黑色花朵+粉色底座',
            ),
            133 => 
            array (
                'attribute' => '花材',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116031,
                'id' => 634,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '厄瓜多尔玫瑰',
            ),
            134 => 
            array (
                'attribute' => '附加功能',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116031,
                'id' => 635,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '音乐盒',
            ),
            135 => 
            array (
                'attribute' => '产品尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116031,
                'id' => 636,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '直径10.5cm*高17cm',
            ),
            136 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116031,
                'id' => 637,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '渐变粉花朵+灰色底座',
            ),
            137 => 
            array (
                'attribute' => '主体材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116032,
                'id' => 638,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '铝合金+布艺',
            ),
            138 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116032,
                'id' => 639,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '高回弹海绵',
            ),
            139 => 
            array (
                'attribute' => '躺椅尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116032,
                'id' => 640,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '840*1250*1090mm',
            ),
            140 => 
            array (
                'attribute' => '脚蹬尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116032,
                'id' => 641,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '550*445*450mm',
            ),
            141 => 
            array (
                'attribute' => '安装方式',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116032,
                'id' => 642,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '自行组装',
            ),
            142 => 
            array (
                'attribute' => '*特别提醒',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116032,
                'id' => 643,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.周六日暂无法发货，周末订单延至周一发货，请知悉！
2.本产品配送范围：江浙沪、安徽、山东、福建、江西、湖北、河南、北京、天津、湖南、河北、山西、陕西、重庆、四川、海南、广西、贵州、云南、广东、辽宁、甘肃、宁夏、青海、内蒙古、吉林、黑龙江、新疆、西藏（航空件）
3.本产品配送整件，不包安装，收到货物后，请自行按照产品说明书进行组装。如果组装时碰到无法解决的问题，可联系客服获取指导。',
            ),
            143 => 
            array (
                'attribute' => '椅身材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116033,
                'id' => 644,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '高弹力进口网布',
            ),
            144 => 
            array (
                'attribute' => '扶手材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116033,
                'id' => 645,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'PU',
            ),
            145 => 
            array (
                'attribute' => '框架材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116033,
                'id' => 646,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '烤漆钢+工程塑料',
            ),
            146 => 
            array (
                'attribute' => '椅轮',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116033,
                'id' => 647,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'PA万向椅轮',
            ),
            147 => 
            array (
                'attribute' => '气杆',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116033,
                'id' => 648,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '三弘气压杆',
            ),
            148 => 
            array (
                'attribute' => '产品尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116033,
                'id' => 649,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '700*700*1160mm',
            ),
            149 => 
            array (
                'attribute' => '安装方式',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116033,
                'id' => 650,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '自行组装',
            ),
            150 => 
            array (
                'attribute' => '*特别提醒',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1116033,
                'id' => 651,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.周六日暂无法发货，周末订单延至周一发货，请知悉！
2.本产品配送范围：江浙沪、安徽、山东、福建、江西、湖北、河南、北京、天津、湖南、河北、山西、陕西、重庆、四川、海南、广西、贵州、云南、广东、辽宁、甘肃、宁夏、青海、内蒙古、吉林、黑龙江、新疆、西藏（航空件）
3.本产品配送整件，不包安装，收到货物后，请自行按照产品说明书进行组装。如果组装时碰到无法解决的问题，可联系客服获取指导。',
            ),
            151 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1125016,
                'id' => 652,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '树脂',
            ),
            152 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1125016,
                'id' => 653,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '黄色/蓝色',
            ),
            153 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1125016,
                'id' => 654,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '129mm*96mm*302mm',
            ),
            154 => 
            array (
                'attribute' => '摆件类型',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1125016,
                'id' => 655,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '收纳型桌面摆件',
            ),
            155 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1125017,
                'id' => 656,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '陶瓷',
            ),
            156 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1125017,
                'id' => 657,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '粉色/哑黑',
            ),
            157 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1125017,
                'id' => 658,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '160mm*145mm*135mm',
            ),
            158 => 
            array (
                'attribute' => '摆件类型',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1125017,
                'id' => 659,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '桌面摆件',
            ),
            159 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127003,
                'id' => 660,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'QB/T 1952.2-2011',
            ),
            160 => 
            array (
                'attribute' => '弹簧结构特征',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127003,
                'id' => 661,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '独立袋装弹簧',
            ),
            161 => 
            array (
                'attribute' => '使用场所',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127003,
                'id' => 662,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '卧室、榻榻米',
            ),
            162 => 
            array (
                'attribute' => '主要原材料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127003,
                'id' => 663,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '进口乳胶',
            ),
            163 => 
            array (
                'attribute' => '辅料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127003,
                'id' => 664,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '软硬质海绵',
            ),
            164 => 
            array (
                'attribute' => '高度',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127003,
                'id' => 665,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '25cm',
            ),
            165 => 
            array (
                'attribute' => '配送范围',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127003,
                'id' => 666,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '以客服回复可配送范围为准',
            ),
            166 => 
            array (
                'attribute' => '重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127003,
                'id' => 667,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '150*200cm  54+-3kg
180*200cm   62+-3kg',
            ),
            167 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127038,
                'id' => 668,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100% 棉',
            ),
            168 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127038,
                'id' => 669,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
            ),
            169 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127038,
                'id' => 670,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '星空蓝',
            ),
            170 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127038,
                'id' => 671,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22844-2009',
            ),
            171 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127038,
                'id' => 672,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国山东',
            ),
            172 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127039,
                'id' => 673,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100% 棉',
            ),
            173 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127039,
                'id' => 674,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
            ),
            174 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127039,
                'id' => 675,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '青粉拼接',
            ),
            175 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127039,
                'id' => 676,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22844-2009',
            ),
            176 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127039,
                'id' => 677,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国山东',
            ),
            177 => 
            array (
                'attribute' => '面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127052,
                'id' => 678,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            178 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127052,
                'id' => 679,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            179 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127052,
                'id' => 680,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T22796-2009',
            ),
            180 => 
            array (
                'attribute' => '安全技术类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127052,
                'id' => 681,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB18401-2010 A类',
            ),
            181 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1127052,
                'id' => 682,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '150*200cm/180*200cm',
            ),
            182 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1128002,
                'id' => 683,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '160*230cm',
            ),
            183 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1128002,
                'id' => 684,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '青粉拼接',
            ),
            184 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1128002,
                'id' => 685,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国北京',
            ),
            185 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1128002,
                'id' => 686,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '绒面：100% 聚酯纤维 背面：52% 聚酯纤维/ 48% 棉',
            ),
            186 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130037,
                'id' => 687,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '40*40*7cm',
            ),
            187 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130037,
                'id' => 688,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%聚酯纤维',
            ),
            188 => 
            array (
                'attribute' => '填充物克重',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130037,
                'id' => 689,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '330g',
            ),
            189 => 
            array (
                'attribute' => '面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130037,
                'id' => 690,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            190 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130037,
                'id' => 691,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '米白/深褐',
            ),
            191 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130037,
                'id' => 692,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22843-2009',
            ),
            192 => 
            array (
                'attribute' => '安全技术类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130037,
                'id' => 693,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 18401-2010 B类',
            ),
            193 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130038,
                'id' => 694,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%聚酯纤维',
            ),
            194 => 
            array (
                'attribute' => '填充物重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130038,
                'id' => 695,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '340g/725g',
            ),
            195 => 
            array (
                'attribute' => '面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130038,
                'id' => 696,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%聚酯纤维',
            ),
            196 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130038,
                'id' => 697,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'FZ/T 62011.3-2008',
            ),
            197 => 
            array (
                'attribute' => '安全类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130038,
                'id' => 698,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 18401-2010 B类',
            ),
            198 => 
            array (
                'attribute' => '产品等级',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130038,
                'id' => 699,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '合格品',
            ),
            199 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130039,
                'id' => 700,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%聚酯纤维',
            ),
            200 => 
            array (
                'attribute' => '面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130039,
                'id' => 701,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%聚酯纤维',
            ),
            201 => 
            array (
                'attribute' => '填充物重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130039,
                'id' => 702,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '170g/250g',
            ),
            202 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130039,
                'id' => 703,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'FZ/T 62011.3-2008',
            ),
            203 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130041,
                'id' => 704,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '45*45cm',
            ),
            204 => 
            array (
                'attribute' => '重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130041,
                'id' => 705,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '0.4-0.6kg',
            ),
            205 => 
            array (
                'attribute' => '材料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130041,
                'id' => 706,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '面100%羊毛皮
衬100%聚酯纤维',
            ),
            206 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130041,
                'id' => 707,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'QB/T2972-2008',
            ),
            207 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130042,
                'id' => 708,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '小号：90*50cm+-2
双拼：180*55cm+-2',
            ),
            208 => 
            array (
                'attribute' => '重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130042,
                'id' => 709,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '小号：0.6-0.9kg
双拼：1.2-2kg',
            ),
            209 => 
            array (
                'attribute' => '材料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130042,
                'id' => 710,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%羊毛皮',
            ),
            210 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130042,
                'id' => 711,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'QB/T 2972-2008',
            ),
            211 => 
            array (
                'attribute' => '产品等级',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130042,
                'id' => 712,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '一等品',
            ),
            212 => 
            array (
                'attribute' => '备注',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130042,
                'id' => 713,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '黑色商品接触液体会有少量掉色',
            ),
            213 => 
            array (
                'attribute' => '面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130049,
                'id' => 714,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '65%莱赛尔（天丝）35%亚麻',
            ),
            214 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130049,
                'id' => 715,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%桑蚕丝',
            ),
            215 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130049,
                'id' => 716,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 24252-2009',
            ),
            216 => 
            array (
                'attribute' => '安全类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130049,
                'id' => 717,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 18401-2010 B类',
            ),
            217 => 
            array (
                'attribute' => '产品等级',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130049,
                'id' => 718,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '合格品',
            ),
            218 => 
            array (
                'attribute' => '填充物克重',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130049,
                'id' => 719,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '360g（小）/470g（大）',
            ),
            219 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130056,
                'id' => 720,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '席面：头层牛皮革/ 枕套面：头层牛皮革/ 枕套背面：100%聚酯纤维',
            ),
            220 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130056,
                'id' => 721,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床：牛皮席：150x200cm/ 枕套：74x48cmx2
1.8米床：牛皮席：180x200cm/ 枕套：74x48cmx2',
            ),
            221 => 
            array (
                'attribute' => '鞣制方式',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130056,
                'id' => 722,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '铬植结合鞣',
            ),
            222 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130056,
                'id' => 723,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '苋红色/ 象牙黄/ 橄榄棕/ 亮银灰',
            ),
            223 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130056,
                'id' => 724,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'QB/T 4204-2011',
            ),
            224 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1130056,
                'id' => 725,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国重庆',
            ),
            225 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1131017,
                'id' => 726,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '席面：毛竹
包边：100%棉
背面：100%棉',
            ),
            226 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1131017,
                'id' => 727,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '150x195cm/ 180x200cm',
            ),
            227 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1131017,
                'id' => 728,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '抹茶色',
            ),
            228 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1131017,
                'id' => 729,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'LY/T 1843-2009',
            ),
            229 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1131017,
                'id' => 730,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国浙江',
            ),
            230 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134022,
                'id' => 731,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '绒面：100% 聚酯纤维
背面：TPR',
            ),
            231 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134022,
                'id' => 732,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '多色条纹',
            ),
            232 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134022,
                'id' => 733,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '86*61cm',
            ),
            233 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134022,
                'id' => 734,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国浙江',
            ),
            234 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134022,
                'id' => 735,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'QB/T 3000-2008',
            ),
            235 => 
            array (
                'attribute' => '规格尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134030,
                'id' => 736,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '方形38*38*3cm
圆形 φ38*3cm',
            ),
            236 => 
            array (
                'attribute' => '填充物重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134030,
                'id' => 737,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '方形：185g
圆形155g',
            ),
            237 => 
            array (
                'attribute' => '面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134030,
                'id' => 738,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%聚酯纤维',
            ),
            238 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134030,
                'id' => 739,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22843-2009',
            ),
            239 => 
            array (
                'attribute' => '安全类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134030,
                'id' => 740,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB18401-2010 B类',
            ),
            240 => 
            array (
                'attribute' => '产品等级',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134030,
                'id' => 741,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '合格品',
            ),
            241 => 
            array (
                'attribute' => '规格尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134032,
                'id' => 742,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '方形：380*380*30mm
圆形：φ380*30mm',
            ),
            242 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134032,
                'id' => 743,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '聚氨酯',
            ),
            243 => 
            array (
                'attribute' => '填充物重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134032,
                'id' => 744,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '方形：185g
圆形：155g',
            ),
            244 => 
            array (
                'attribute' => '面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134032,
                'id' => 745,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%聚酯纤维',
            ),
            245 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134032,
                'id' => 746,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22843-2009',
            ),
            246 => 
            array (
                'attribute' => '安全技术类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134032,
                'id' => 747,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB18401-2010 B类',
            ),
            247 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134056,
                'id' => 748,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '70%棉，30%莫代尔',
            ),
            248 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134056,
                'id' => 749,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
            ),
            249 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134056,
                'id' => 750,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '砖釉红/菡萏粉/浅豆绿/青丝灰',
            ),
            250 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134056,
                'id' => 751,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22844-2009',
            ),
            251 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1134056,
                'id' => 752,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国江苏',
            ),
            252 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135000,
                'id' => 753,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            253 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135000,
                'id' => 754,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
            ),
            254 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135000,
                'id' => 755,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '蒂芙尼蓝/ 墨黑/ 亮橙/ 浅灰',
            ),
            255 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135000,
                'id' => 756,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22844-2009',
            ),
            256 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135000,
                'id' => 757,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国江苏',
            ),
            257 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135001,
                'id' => 758,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            258 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135001,
                'id' => 759,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
            ),
            259 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135001,
                'id' => 760,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '草绿色',
            ),
            260 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135001,
                'id' => 761,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22844-2009',
            ),
            261 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135001,
                'id' => 762,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国江苏',
            ),
            262 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135002,
                'id' => 763,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100% 桑蚕丝',
            ),
            263 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135002,
                'id' => 764,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
            ),
            264 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135002,
                'id' => 765,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '浅杏粉/ 玛瑙红/ 烟白灰',
            ),
            265 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135002,
                'id' => 766,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国四川',
            ),
            266 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135002,
                'id' => 767,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T22796-2009',
            ),
            267 => 
            array (
                'attribute' => '产品材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135050,
                'id' => 768,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'PP塑料',
            ),
            268 => 
            array (
                'attribute' => '产品尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135050,
                'id' => 769,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '52*42*40cm',
            ),
            269 => 
            array (
                'attribute' => '产品净重',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135050,
                'id' => 770,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '2.105kg',
            ),
            270 => 
            array (
                'attribute' => '产品毛重',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135050,
                'id' => 771,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '3.215kg',
            ),
            271 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135050,
                'id' => 772,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 9688-1988',
            ),
            272 => 
            array (
                'attribute' => '配送范围',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135050,
                'id' => 773,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '请咨询客服',
            ),
            273 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135051,
                'id' => 774,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100% 聚酯纤维',
            ),
            274 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135051,
                'id' => 775,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.4 x 2.6M：适用于1.4M宽以下的窗户。
1.75 x 2.6M：适用于1.4M-1.75M宽的窗户。
2.25 x 2.6M：适用于1.75M-2.25M宽的窗户。
2.8 x 2.6M：适用于2.25M-2.8M宽的窗户。
3.5 x 2.6M：适用于2.8M-3.5M宽的窗户。
4.5 x 2.6M：适用于3.5M-4.5M宽的窗户。',
            ),
            275 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135051,
                'id' => 776,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 19817-2005',
            ),
            276 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135051,
                'id' => 777,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '米色/ 蓝灰/ 烟灰/ 咖色',
            ),
            277 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135051,
                'id' => 778,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国浙江',
            ),
            278 => 
            array (
                'attribute' => '物理遮光率',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135051,
                'id' => 779,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '80%左右',
            ),
            279 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135052,
                'id' => 780,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '36%黏胶纤维/  10%亚麻/ 54%聚酯纤维',
            ),
            280 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135052,
                'id' => 781,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '深卡其/ 米灰/ 灰蓝/ 粉橙',
            ),
            281 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135052,
                'id' => 782,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国浙江',
            ),
            282 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135052,
                'id' => 783,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 19817-2005',
            ),
            283 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135052,
                'id' => 784,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.4 x 2.6M：适用于1.4M宽以下的窗户。
1.75 x 2.6M：适用于1.4M-1.75M宽的窗户。
2.25 x 2.6M：适用于1.75M-2.25M宽的窗户。
2.8 x 2.6M：适用于2.25M-2.8M宽的窗户。
3.5 x 2.6M：适用于2.8M-3.5M宽的窗户。
4.5 x 2.6M：适用于3.5M-4.5M宽的窗户。',
            ),
            284 => 
            array (
                'attribute' => '物理遮光率',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135052,
                'id' => 785,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '60%-70%左右',
            ),
            285 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135053,
                'id' => 786,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '47%黏胶纤维/  53%聚酯纤维',
            ),
            286 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135053,
                'id' => 787,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.4 x 2.6M：适用于1.4M宽以下的窗户。
1.75 x 2.6M：适用于1.4M-1.75M宽的窗户。
2.25 x 2.6M：适用于1.75M-2.25M宽的窗户。
2.8 x 2.6M：适用于2.25M-2.8M宽的窗户。
3.5 x 2.6M：适用于2.8M-3.5M宽的窗户。
4.5 x 2.6M：适用于3.5M-4.5M宽的窗户。',
            ),
            287 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135053,
                'id' => 788,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '山岩灰',
            ),
            288 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135053,
                'id' => 789,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 19817-2005',
            ),
            289 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135053,
                'id' => 790,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国浙江',
            ),
            290 => 
            array (
                'attribute' => '物理遮光率',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135053,
                'id' => 791,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '70-80%左右',
            ),
            291 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135054,
                'id' => 792,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '36% 聚酯纤维 74% 粘胶纤维',
            ),
            292 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135054,
                'id' => 793,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.4 x 2.6M：适用于1.4M宽以下的窗户。
1.75 x 2.6M：适用于1.4M-1.75M宽的窗户。
2.25 x 2.6M：适用于1.75M-2.25M宽的窗户。
2.8 x 2.6M：适用于2.25M-2.8M宽的窗户。
3.5 x 2.6M：适用于2.8M-3.5M宽的窗户。
4.5 x 2.6M：适用于3.5M-4.5M宽的窗户。',
            ),
            293 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135054,
                'id' => 794,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '蓝色/ 绿色/ 黄色/ 红色',
            ),
            294 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135054,
                'id' => 795,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 19817-2005',
            ),
            295 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135054,
                'id' => 796,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国浙江',
            ),
            296 => 
            array (
                'attribute' => '物理遮光性',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135054,
                'id' => 797,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '80%左右',
            ),
            297 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135055,
                'id' => 798,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '52% 黏胶纤维  48%聚酯纤维',
            ),
            298 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135055,
                'id' => 799,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.4 x 2.6M：适用于1.4M宽以下的窗户。
1.75 x 2.6M：适用于1.4M-1.75M宽的窗户。
2.25 x 2.6M：适用于1.75M-2.25M宽的窗户。
2.8 x 2.6M：适用于2.25M-2.8M宽的窗户。
3.5 x 2.6M：适用于2.8M-3.5M宽的窗户。
4.5 x 2.6M：适用于3.5M-4.5M宽的窗户。',
            ),
            299 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135055,
                'id' => 800,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '米灰几何纹/ 橙灰几何纹/ 蓝灰几何纹',
            ),
            300 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135055,
                'id' => 801,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 19817-2005',
            ),
            301 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135055,
                'id' => 802,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国浙江',
            ),
            302 => 
            array (
                'attribute' => '物理遮光率',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135055,
                'id' => 803,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '70%-80%左右',
            ),
            303 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135056,
                'id' => 804,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '54% 黏胶纤维/ 46%聚酯纤维',
            ),
            304 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135056,
                'id' => 805,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.4 x 2.6M：适用于1.4M宽以下的窗户。
1.75 x 2.6M：适用于1.4M-1.75M宽的窗户。
2.25 x 2.6M：适用于1.75M-2.25M宽的窗户。
2.8 x 2.6M：适用于2.25M-2.8M宽的窗户。
3.5 x 2.6M：适用于2.8M-3.5M宽的窗户。
4.5 x 2.6M：适用于3.5M-4.5M宽的窗户。',
            ),
            305 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135056,
                'id' => 806,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 19817-2005',
            ),
            306 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135056,
                'id' => 807,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '蓝条纹/ 粉条纹',
            ),
            307 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135056,
                'id' => 808,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国浙江',
            ),
            308 => 
            array (
                'attribute' => '物理遮光率',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135056,
                'id' => 809,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '60%-70%左右',
            ),
            309 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135057,
                'id' => 810,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100% 聚酯纤维',
            ),
            310 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135057,
                'id' => 811,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.4 x 2.6M：适用于1.4M宽以下的窗户。
1.75 x 2.6M：适用于1.4M-1.75M宽的窗户。
2.25 x 2.6M：适用于1.75M-2.25M宽的窗户。
2.8 x 2.6M：适用于2.25M-2.8M宽的窗户。
3.5 x 2.6M：适用于2.8M-3.5M宽的窗户。
4.5 x 2.6M：适用于3.5M-4.5M宽的窗户。',
            ),
            311 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135057,
                'id' => 812,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 19817-2005',
            ),
            312 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135057,
                'id' => 813,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '莹白',
            ),
            313 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135057,
                'id' => 814,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国浙江',
            ),
            314 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135058,
                'id' => 815,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '35*45cm',
            ),
            315 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135058,
                'id' => 816,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '聚苯乙烯泡沫粒子',
            ),
            316 => 
            array (
                'attribute' => '填充物重量',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135058,
                'id' => 817,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '260g',
            ),
            317 => 
            array (
                'attribute' => '面料',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135058,
                'id' => 818,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100%棉',
            ),
            318 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135058,
                'id' => 819,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22843-2009',
            ),
            319 => 
            array (
                'attribute' => '安全技术类别',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1135058,
                'id' => 820,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB 8401-2010 B类',
            ),
            320 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1138000,
                'id' => 821,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '面料: 96% 涤纶 4%氨纶
填充物：100%聚酯纤维',
            ),
            321 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1138000,
                'id' => 822,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '直径40cm/ 直径55cm',
            ),
            322 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1138000,
                'id' => 823,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22843-2009',
            ),
            323 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1138000,
                'id' => 824,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国浙江',
            ),
            324 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1138000,
                'id' => 825,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '天青色/ 松叶绿/ 珊瑚红/ 姜黄色/ 香芋粉/ 卡其色/ 深咖色/ 海军蓝',
            ),
            325 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1138001,
                'id' => 826,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '抱枕套：100%棉
抱枕芯外壳：100%棉
绣线：100%聚酯纤维
填充：100%聚酯纤维',
            ),
            326 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1138001,
                'id' => 827,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '静谧蓝/ 古典金/ 动感绿/ 浪漫粉',
            ),
            327 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1138001,
                'id' => 828,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '45 x 45cm',
            ),
            328 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1138001,
                'id' => 829,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22843-2009',
            ),
            329 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1138001,
                'id' => 830,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国山东',
            ),
            330 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1143015,
                'id' => 831,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '席面：蔺草/ 包边：100% 棉',
            ),
            331 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1143015,
                'id' => 832,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'QB/T 2934-2008',
            ),
            332 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1143015,
                'id' => 833,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国浙江',
            ),
            333 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1143015,
                'id' => 834,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '抹茶色',
            ),
            334 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1147045,
                'id' => 835,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '灰黄条纹',
            ),
            335 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1147045,
                'id' => 836,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '160*230cm',
            ),
            336 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1147045,
                'id' => 837,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '绒面：100% 聚酯纤维 背面：52% 聚酯纤维/ 48% 棉',
            ),
            337 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1147045,
                'id' => 838,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国北京',
            ),
            338 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1147046,
                'id' => 839,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '条纹粉间',
            ),
            339 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1147046,
                'id' => 840,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '160*230cm',
            ),
            340 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1147046,
                'id' => 841,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '绒面：100% 聚酯纤维 背面：52% 聚酯纤维/ 48% 棉',
            ),
            341 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1147046,
                'id' => 842,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国北京',
            ),
            342 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1147047,
                'id' => 843,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '160*230cm',
            ),
            343 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1147047,
                'id' => 844,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '绒面：100% 聚酯纤维 背面：52% 聚酯纤维/ 48% 棉',
            ),
            344 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1147047,
                'id' => 845,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '蓝粉拼接',
            ),
            345 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1147047,
                'id' => 846,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国北京',
            ),
            346 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1147048,
                'id' => 847,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '160*230cm',
            ),
            347 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1147048,
                'id' => 848,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '蓝灰格',
            ),
            348 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1147048,
                'id' => 849,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '绒面：100% 聚酯纤维 背面：52% 聚酯纤维/ 48% 棉',
            ),
            349 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1147048,
                'id' => 850,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国北京',
            ),
            350 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1151012,
                'id' => 851,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100% 棉',
            ),
            351 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1151012,
                'id' => 852,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
            ),
            352 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1151012,
                'id' => 853,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '素雅灰',
            ),
            353 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1151012,
                'id' => 854,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22844-2009',
            ),
            354 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1151012,
                'id' => 855,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国山东',
            ),
            355 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1151013,
                'id' => 856,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100% 棉',
            ),
            356 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1151013,
                'id' => 857,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
            ),
            357 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1151013,
                'id' => 858,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '胭脂粉',
            ),
            358 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1151013,
                'id' => 859,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22844-2009',
            ),
            359 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1151013,
                'id' => 860,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国山东',
            ),
            360 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1152161,
                'id' => 861,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '12%长麻/ 12%竹浆纤维/ 76%莱赛尔',
            ),
            361 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1152161,
                'id' => 862,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
            ),
            362 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1152161,
                'id' => 863,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国江苏',
            ),
            363 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1152161,
                'id' => 864,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22844-2009',
            ),
            364 => 
            array (
                'attribute' => '材质',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1155000,
                'id' => 865,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '100% 棉',
            ),
            365 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1155000,
                'id' => 866,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
            ),
            366 => 
            array (
                'attribute' => '颜色',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1155000,
                'id' => 867,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '条纹绿格',
            ),
            367 => 
            array (
                'attribute' => '执行标准',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1155000,
                'id' => 868,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => 'GB/T 22844-2009',
            ),
            368 => 
            array (
                'attribute' => '产地',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1155000,
                'id' => 869,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '中国山东',
            ),
            369 => 
            array (
                'attribute' => '规格',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1181000,
                'id' => 870,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '组合一：AB面独立弹簧床垫 进口乳胶150*200cm*1+可水洗抗菌防螨丝羽绒枕*2。
组合二：AB面独立弹簧床垫 进口乳胶180*200cm*1+可水洗抗菌防螨丝羽绒枕*2',
            ),
            370 => 
            array (
                'attribute' => '重要提醒',
                'created_at' => '2018-02-01 00:00:00',
                'deleted_at' => NULL,
                'goods_id' => 1181000,
                'id' => 871,
                'updated_at' => '2018-02-01 00:00:00',
                'value' => '活动时间：5月8日0点-5月14日24点。
请在以上时间段内购买，其余时间均不可享受组合装优惠。',
            ),
            371 => 
            array (
                'attribute' => '尺寸',
                'created_at' => '2018-10-26 21:27:13',
                'deleted_at' => NULL,
                'goods_id' => 1006014,
                'id' => 872,
                'updated_at' => '2018-10-26 21:27:13',
                'value' => '200*230cm/ 220*240cm',
            ),
            372 => 
            array (
                'attribute' => '面料',
                'created_at' => '2018-10-26 21:27:13',
                'deleted_at' => NULL,
                'goods_id' => 1006014,
                'id' => 873,
                'updated_at' => '2018-10-26 21:27:13',
                'value' => '100%棉',
            ),
            373 => 
            array (
                'attribute' => '填充物',
                'created_at' => '2018-10-26 21:27:13',
                'deleted_at' => NULL,
                'goods_id' => 1006014,
                'id' => 874,
                'updated_at' => '2018-10-26 21:27:13',
                'value' => '100%双宫茧桑蚕丝',
            ),
            374 => 
            array (
                'attribute' => '填充物重量',
                'created_at' => '2018-10-26 21:27:13',
                'deleted_at' => NULL,
                'goods_id' => 1006014,
                'id' => 875,
                'updated_at' => '2018-10-26 21:27:13',
                'value' => '0.5+1.5KG/1+2KG',
            ),
            375 => 
            array (
                'attribute' => '温馨提示',
                'created_at' => '2018-10-26 21:27:13',
                'deleted_at' => NULL,
                'goods_id' => 1006014,
                'id' => 876,
                'updated_at' => '2018-10-26 21:27:13',
                'value' => '天然桑蚕丝具有正常蛋白味道，通风晾晒2-3天即可散去',
            ),
        ));
        
        
    }
}