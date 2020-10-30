from typing import List


def render_code_template(text_template: str, vars: List[dict]):
    result = text_template
    for val, var in vars:
        result = result.replace(var, val)

    return result


template = r"""< ?php

namespace Reportes\$DOMAIN_ENTITY$\Domain;

use Reportes\Shared\Domain\ValueObject\$DATA_TYPE$;

final class $ATTR_NAME$ extends $DATA_TYPE$
{

}
"""

vars = [
    {"$DOMAIN_ENTITY$", "Acta"},
    {"$DATA_TYPE$", "ArrayValueObject"},
    {"$ATTR_NAME$", "ActaName"}
]

new_template = render_code_template(template, vars)

print(new_template)