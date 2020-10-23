import os, sys

print(sys.argv)


class DataClassMaker:
    def __init__(self, name: str, attribs: list):
        self.__name = name
        self.__attribs = attribs

    def __make_attribs(self):
        result = ""
        for attrib in self.__attribs:
            result += f"""    private ${attrib};
"""
        return result

    def __write_definition(self):
        name = self.__name.capitalize()

        definition = f"""class {name}
"""
        definition += "{"
        return definition

    def __constructor(self):
        constructor = f"""    function __construct(
"""
        count = 0
        for attrib in self.__attribs:
            count += 1
            coma = ','
            if count == len(self.__attribs):
                coma = ''
            constructor += f'''        ${attrib} = ""{coma}
'''
        constructor += """    ) {
"""
        for attrib in self.__attribs:
            constructor += f"""        $this->{attrib} = ${attrib};
"""

        constructor += "    }"
        return constructor

    def __serialization(self):
        serialize = "\n    #region Serialization \n"
        serialize += """    public static function fromPrimitives(array $primitives)
    {"""
        serialize += "   return new self(\n"
        count = 0
        for attrib in self.__attribs:
            count += 1
            coma = ','
            if count == len(self.__attribs):
                coma = ''
            serialize += f"""            ${attrib} = $primitives["{attrib}"]{coma}\n"""

        serialize += """        );
    }
    
"""

        serialize += """    public function toPrimitives()
    {
        $primitives = array(
"""
        count = 0
        for attrib in self.__attribs:
            count += 1
            coma = ','
            if count == len(self.__attribs):
                coma = ''
            serialize += f"""            '{attrib}' => $this->{attrib}{coma}
"""

        serialize += """
        );
        
        return $primitives;
    }
    #endregion"""

        return serialize

    def __end(self):
        return """}
"""

    def make(self):
        print(self.__write_definition())
        print(self.__make_attribs())
        print(self.__constructor())
        print(self.__serialization())
        print(self.__end())


HELP_TEXT = f""" --- Data class maker for php 5 v 1.0 ---
    help, h = Imprime la ayuda del comando.
    
    make, m = Crear nueva data class

    ¿Cómo usar?
    data_class.py make <class_name> <arrt1>,<attr2>,...<attrN>

    Ejemplo:
    data_class.py make user name,id,password
        """


def cli(argv):
    if len(argv) < 2:
        print(HELP_TEXT)
        raise Exception('Ocurrió un problema al intentar ejecutar el comando. :(')

    command: str = argv[1]
    params: str = argv[3]
    class_name: str = argv[2]
    if command == 'help' or command == 'h':
        print(HELP_TEXT)
    if command == 'make' or command == 'm':
        attrs = params.split(',')
        print(f'Attrs: {attrs}')
        mk_data_class = DataClassMaker(class_name, attrs)
        mk_data_class.make()


if __name__ == "__main__":
    cli(sys.argv)
