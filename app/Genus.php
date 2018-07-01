<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genus extends Model
{
    protected $guarded = ['id'];

    public function species(){
        return $this->hasMany('App\Species');
    }

    public function vegetables(){
        return $this->hasManyThrough('App\Vegetable', 'App\Species');
    }

    public static function charactersList($name = '')
    {
        switch ($name) {
            case 'Capsicum':
                return [
                    'Hypocotil color',
                    'Cotyledon leaf color',
                    'Cotyledon leaf shape',
                    'Anthocyanin Level',
                    'Plant Habit',
                    'Stem color',
                    'Stem diameter',
                    'Branching habit',
                    'Height of first branch',
                    'Leaf shape',
                    'Leaf Margin',
                    'Leaf Color',
                    'Leaf Length',
                    'Leaf Width',
                    'Petiole Length',
                    'Days to Flowering',
                    'No. of pedicles per axil',
                    'Flower Shape',
                    'Sepal Color',
                    'Petal Color',
                    'Stamen Color',
                    'Pistil Color',
                    'Stigma Position',
                    'Days to Fruit',
                    'No. of Fruits set per axil',
                    'Immature Fruit color',
                    'Mature Fruit Color',
                    'Anthocyanin spot in unripe stage',
                    'Fruit position',
                    'Pedicle color',
                    'Pedicle length',
                    'Fruit Length',
                    'Fruit Diamater',
                    'Fruit size ratio',
                    'Fruit Shape',
                    'Fruit tip/end shape',
                    'Fruit wall thickness',
                    'Fruit weight',
                    'Harvest Time',
                    'Fruit Firmness',
                    'Fruit pungency',
                    'Number of Locules',
                    'Seed Shape',
                    'Seed color',
                    'Seed Size',
                    '100 Seed Weight',
                ];
                break;

            case 'Vigna':
                return [
                    'Hypocotil color',
                    'Cotyledon leaf color',
                    'Cotyledon leaf shape',
                    'Stem color',
                    'Leaf shape',
                    'Leaf Margin',
                    'Leaf Color',
                    'Leaf Length',
                    'Leaf Width',
                    'Petiole Length',
                    'Leaf surface',
                    'Growth habit (climbing/dwarf)',
                    'Days to Flowering',
                    'Flower Shape',
                    'Sepal Color',
                    'Petal Color',
                    'Stamen Color',
                    'Pistil Color',
                    'Pedicle color',
                    'Pedicle length',
                    'Pod Length',
                    'Pod Diameter',
                    'Pod Shape',
                    'Pod curvature',
                    'Beak length',
                    'Beak color',
                    'Pod glossiness',
                    'Pod weight',
                    'Days to harvesting mature stage',
                    'No.of pod per pedicle',
                    'No. of seeds per pod',
                    'Immature/Fresh pod color',
                    'Mature pod Color',
                    'Seed Shape',
                    'Seed color',
                    '100 Seed Weight',
                    'Seed hilum size',
                    'Seed hilum color',
                    'Seed Size (l x d)',
                ];
                break;

            case 'Cucumis':
                return [
                    'Hypocotil color',
                    'Cotyledon leaf color',
                    'Cotyledon leaf shape',
                    'Stem color',
                    'Stem diameter',
                    'Leaf shape',
                    'Leaf Margin',
                    'Leaf Color',
                    'Leaf Length',
                    'Leaf Width',
                    'Petiole Length',
                    'Leaf surface',
                    'Plant vigor',
                    'No. of side branches',
                    'Tendril',
                    'Climbing ability',
                    'Internode length',
                    'Days to Flowering',
                    'Flower Shape',
                    'Sepal Color',
                    'Petal Color',
                    'Stamen Color',
                    'Pistil Color',
                    'Flower type',
                    'Ovary shape',
                    'Ovary color',
                    'Sex ratio (F/M)',
                    'Days to Fruit',
                    'Pedicle color',
                    'Pedicle length',
                    'Fruit Length',
                    'Fruit Diamater',
                    'Fruit size ratio',
                    'Fruit Shape',
                    'Fruit tip/end shape',
                    'Fruit weight',
                    'Days to harvesting',
                    'Fruit Firmness',
                    'Fruit skin color',
                    'Fruit skin glossiness',
                    'Fruit stripe color',
                    'Fruit spines',
                    'Fruit flesh thickness',
                    'Fruit cavity',
                    'Flesh color',
                    'Fruit bitterness',
                    'No. of locules',
                    'Fruit Aroma',
                    'Fruit storability',
                    'Fresh Fruit color',
                    'Harvest Fruit Color',
                    'Seed Shape',
                    'Seed color',
                    '100 Seed Weight',
                    'Seed Size (l x w)',
                ];
                    break;    

            case 'Solanum':
                return [
                    'Hypocotil color',
                    'Anthocyanin Level',
                    'Plant Habit',
                    'Stem Color',
                    'Stem Diameter',
                    'Leaf Shape',
                    'Leaf Margin',
                    'Leaf Color',
                    'Leaf Length',
                    'Leaf Width',
                    'Petiole Length',
                    'Spines on Leaf',
                    'Leaf Hairiness',
                    'Petiole Color',
                    'Plant Height',
                    'Spines on Stem',
                    'Internode Length',
                    'Days to Flowering',
                    'Flower Shape',
                    'Sepal Color',
                    'Petal Color',
                    'Stamen Color',
                    'Pistil Color',
                    'Stigma Position',
                    'Inflorescence Type',
                    'Days to Fruit',
                    'Immature Fruit color',
                    'Mature Fruit Color',
                    'Pedicle color',
                    'Fruit Length',
                    'Fruit Diamater',
                    'Fruit size ratio',
                    'Fruit Shape',
                    'Harvest Time',
                    'Firmness',
                    'Number of Locules',
                    'Flesh color',
                    'Fruit Type',
                    'No. of Fruits set per inflorescence',
                    'Pedicle thickness',
                    'Spine on pedicle',
                    'Pedicle length',
                    'Fruit position',
                    'Fruit apex shape',
                    'Flesh Flavour',
                    'Seed Shape',
                    'Seed color',
                    'Seed Size',
                    '100 Seed Weight',
                ];
                break;

            default:
                return [];
                break;
        }
    }
}
