<?php declare(strict_types=1);

namespace GraphQL\Language\AST;

class FragmentSpreadNode extends Node implements SelectionNode
{
    public string $kind = NodeKind::FRAGMENT_SPREAD;

    public NameNode $name;

    /** @var NodeList<DirectiveNode> */
    public NodeList $directives;
}
