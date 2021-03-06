<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Sylius\Bundle\TaxonomiesBundle\Entity;

use PHPSpec2\ObjectBehavior;

/**
 * Taxon entity spec.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class Taxon extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Sylius\Bundle\TaxonomiesBundle\Entity\Taxon');
    }

    function it_implements_Sylius_taxon_interface()
    {
        $this->shouldImplement('Sylius\Bundle\TaxonomiesBundle\Model\TaxonInterface');
    }

    function it_extends_Sylius_taxon_model()
    {
        $this->shouldHaveType('Sylius\Bundle\TaxonomiesBundle\Model\Taxon');
    }
}
