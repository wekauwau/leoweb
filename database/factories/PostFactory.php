<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Lorem Ipsum',
            'content' => '
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id finibus diam. Fusce ac efficitur magna, eu bibendum libero. Mauris interdum tellus felis, ut rhoncus massa ornare eget. Curabitur eget venenatis orci. Phasellus hendrerit interdum vehicula. Ut mollis felis eget congue lacinia. Etiam sagittis ac lacus et scelerisque. Donec mi sem, vulputate sed velit ut, euismod aliquam elit. In sed mauris eget dui ultricies tincidunt. Vestibulum bibendum enim at lacus lacinia, at vehicula libero bibendum. Cras efficitur sit amet arcu vel faucibus. Vivamus viverra auctor nisl eget facilisis. Sed porta elit at lectus pretium consequat. Ut gravida pretium maximus.

Phasellus auctor, augue ac auctor hendrerit, ante elit laoreet lacus, eget posuere sem metus ut elit. Aenean iaculis nisi nec lectus lobortis, in ornare lacus faucibus. Ut eu lacus ac tellus sollicitudin sollicitudin at in felis. Cras ligula ipsum, iaculis sit amet convallis quis, scelerisque eget ante. Morbi ac enim sed quam dignissim sodales a vitae elit. Praesent convallis ornare massa, in fermentum ligula pellentesque vel. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent sit amet dolor at magna vulputate molestie quis vel neque. Sed ut pretium leo. Interdum et malesuada fames ac ante ipsum primis in faucibus.

Etiam dapibus rutrum sodales. Pellentesque lacinia metus nec quam malesuada ornare. Vivamus interdum magna et ante lacinia, a fermentum tortor tristique. Pellentesque dictum eros et pellentesque gravida. Donec vestibulum enim eget nisi cursus, eget tempus dolor dapibus. Integer pretium nunc eget neque finibus, eu eleifend diam egestas. Fusce luctus nec enim et venenatis. Praesent posuere nisl ut iaculis luctus. Donec quis libero id nibh interdum scelerisque. Duis fringilla imperdiet diam sed pretium. In in elementum massa. Praesent non iaculis augue. Phasellus sit amet augue nunc.

Nam sem sapien, lacinia nec lorem et, convallis malesuada urna. Etiam volutpat semper velit, non tempor nisl. Integer efficitur est vel mi molestie, vel sodales nulla condimentum. Proin faucibus, ipsum nec ullamcorper semper, sapien lectus dictum urna, vitae luctus dui tellus sed ex. Proin at mollis magna. Donec et purus viverra, volutpat nibh sit amet, aliquam tellus. Cras vitae mi nec urna aliquam convallis ut eu risus. Pellentesque porttitor at sem non eleifend. Nam a libero ac nulla volutpat lacinia. Proin eu pretium tellus. Nam ultrices libero vitae libero finibus rhoncus. Sed commodo in justo sed lobortis. Maecenas suscipit ut ante posuere hendrerit. Nulla rhoncus augue justo, non sagittis leo accumsan ut. In cursus turpis id risus finibus malesuada.

Quisque eu iaculis metus. Morbi in sagittis mauris, eu bibendum dui. Proin viverra tellus id turpis pretium dignissim. Donec volutpat bibendum nibh ac varius. Aenean sit amet turpis ultrices diam consectetur cursus eget non libero. In laoreet tempus pretium. Phasellus vehicula dui sed pellentesque aliquam. Donec lacus metus, auctor a cursus in, congue bibendum justo. Cras porttitor neque ac dui semper fringilla. Nunc sit amet tortor quis elit posuere tristique. ',
        ];
    }
}
