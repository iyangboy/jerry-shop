<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name'     => '中低压配电',
                'children' => [
                    [
                        'name' => '微型断路器',
                        'children' => [
                            ['name' => '微型断路器'],
                            ['name' => '微型隔离开关'],
                            ['name' => '微型漏电保护断路器'],
                            ['name' => '微型漏电模块附件'],
                            ['name' => '微型漏电开关'],
                            ['name' => '导轨插座'],
                        ],
                    ],
                    [
                        'name' => '塑壳断路器',
                        'children' => [
                            ['name' => '塑壳断路器'],
                            ['name' => '塑壳式负荷隔离开关'],
                            ['name' => '塑壳漏电保护断路器'],
                            ['name' => '塑壳漏电模块附件'],
                        ],
                    ],
                    [
                        'name' => '空气断路器',
                        'children' => [
                            ['name' => '框架断路器'],
                            ['name' => '框架式负荷隔离'],
                        ],
                    ],
                    [
                        'name' => '转换开关',
                        'children' => [
                            ['name' => '双电源'],
                            ['name' => '双投转换开关'],
                            ['name' => '转换开关附件'],
                        ],
                    ],
                    [
                        'name' => '负荷隔离开关',
                        'children' => [
                            ['name' => '负荷隔离开关'],
                            ['name' => '熔断器式隔离开关'],
                            ['name' => '刀开关'],
                            ['name' => '刀开关附件'],
                        ],
                    ],
                    [
                        'name' => '熔断器',
                        'children' => [
                            ['name' => '熔断器本体'],
                            ['name' => '熔断器底座'],
                        ],
                    ],
                    [
                        'name' => '电工电料',
                        'children' => [
                            ['name' => '面板开关'],
                            ['name' => '排插'],
                            ['name' => '强电箱附件'],
                            ['name' => '弱电箱'],
                            ['name' => '弱电箱模块'],
                            ['name' => '光纤终端信息箱'],
                            ['name' => '等电位联结端子箱'],
                        ],
                    ],
                    [
                        'name' => '工业连接器',
                        'children' => [
                            ['name' => '工业插头插座'],
                            ['name' => '插芯'],
                            ['name' => '矩形连接器'],
                            ['name' => '外壳'],
                            ['name' => '圆形连接器'],
                            ['name' => '适配器'],
                            ['name' => '连接器附件'],
                        ],
                    ],
                    [
                        'name' => '电涌保护器',
                        'children' => [
                            ['name' => '电涌保护器'],
                            ['name' => '避雷器'],
                            ['name' => '电涌保护器专用后备保护装置'],
                            ['name' => '电涌保护器附件'],
                        ],
                    ],
                    [
                        'name' => '电能质量产品',
                        'children' => [
                            ['name' => '电容器'],
                            ['name' => '电抗器'],
                            ['name' => '补偿控制器'],
                            ['name' => '滤波器'],
                        ],
                    ],
                    [
                        'name' => '中压断路器',
                        'children' => [
                            ['name' => '真空断路器'],
                            ['name' => '六氟化硫断路器'],
                            ['name' => '【ZYD】分类'],
                        ],
                    ],
                    [
                        'name' => '中压接触器',
                        'children' => [
                            ['name' => '真空接触器'],
                        ],
                    ],
                    [
                        'name' => '中压继电器',
                        'children' => [
                            ['name' => '综合保护继电器'],
                            ['name' => '中压中间继电器'],
                            ['name' => '中压时间继电器'],
                            ['name' => '中压电压继电器'],
                            ['name' => '中压过流继电器'],
                        ],
                    ],
                ],
            ],
            [
                'name'     => '工控自动化',
                'children' => [
                    ['name' => '接触器'],
                    ['name' => '继电器'],
                    ['name' => '电动机控制与保护'],
                    ['name' => '信号与控制'],
                    ['name' => '变频软启'],
                    ['name' => '工业电源'],
                    ['name' => '传感器'],
                    ['name' => 'PLC可编程控制器'],
                    ['name' => '人机界面'],
                    ['name' => '通讯产品'],
                    ['name' => '电动机'],
                    ['name' => '运动控制'],
                    ['name' => '工控机'],
                    ['name' => '照明控制元件'],
                ],
            ],
            [
                'name'     => '测量与仪表',
                'children' => [
                    ['name' => '电力仪表'],
                    ['name' => '仪器仪表'],
                    ['name' => '量具'],
                    ['name' => '互感器'],
                    ['name' => '变送器'],
                ],
            ],
            [
                'name'     => '电气辅材',
                'children' => [
                    ['name' => '端子'],
                    ['name' => '劳保'],
                    ['name' => '胶黏、润滑'],
                    ['name' => '电线电缆'],
                    ['name' => '扎带'],
                    ['name' => '线槽'],
                    ['name' => '软管'],
                    ['name' => '电缆接头'],
                    ['name' => '固定类'],
                    ['name' => '结束带'],
                    ['name' => '保护部品'],
                    ['name' => '绝缘子'],
                ],
            ],
            [
                'name'     => '五金工具',
                'children' => [
                    ['name' => '照明'],
                    ['name' => '智能安防监控'],
                    ['name' => '智能网络设备'],
                    ['name' => '智能报警设备'],
                    ['name' => '楼宇智能配件'],
                    ['name' => '充电设备'],
                    ['name' => '暖通设备'],
                ],
            ],
        ];

        foreach ($categories as $data) {
            $this->createCategory($data);
        }
    }

    protected function createCategory($data, $parent = null)
    {
        // 创建一个新的类目对象
        $category = new Category(['name' => $data['name']]);
        // 如果有 children 字段则代表这是一个父类目
        $category->is_directory = isset($data['children']);
        // 如果有传入 $parent 参数，代表有父类目
        if (!is_null($parent)) {
            $category->parent()->associate($parent);
        }
        //  保存到数据库
        $category->save();
        // 如果有 children 字段并且 children 字段是一个数组
        if (isset($data['children']) && is_array($data['children'])) {
            // 遍历 children 字段
            foreach ($data['children'] as $child) {
                // 递归调用 createCategory 方法，第二个参数即为刚刚创建的类目
                $this->createCategory($child, $category);
            }
        }
    }
}
