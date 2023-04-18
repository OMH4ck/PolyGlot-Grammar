grammar SimpleLang;

options {
  contextSuperClass = PolyGlotRuleContext;
}

@parser::header {
/* parser/listener/visitor header section */
#include "polyglot_rule_context.h"
}

program : stmtlist {$ctx->SetScopeType(kScopeGlobal);};

stmtlist : stmt stmtlist
         | stmt ;

stmt : forstmt
     | declaration_stmt ';'
     | function_def
     | expr ';' ;

declaration_stmt : type assign_expr {$ctx->SetDataType(kVariableDefinition);}
                  | 'STRUCT' identifier assign_expr
                  | structure_declaration ;

structure_declaration : 'STRUCT' identifier '{' declaration_stmt_list '}' {$ctx->SetDataType(kClassDefinition); $ctx->identifier()->SetDataType(kClassName); $ctx->declaration_stmt_list()->SetDataType(kClassBody); $ctx->declaration_stmt_list()->SetScopeType(kScopeClass);} ;

declaration_stmt_list : declaration_stmt ';'
                       | declaration_stmt ';' declaration_stmt_list ;

type : 'INT' {$ctx->SetDataType(kVariableType);}
     | 'FLOAT' {$ctx->SetDataType(kVariableType); };

function_def : type 'FUNCTION' identifier '(' argument_list? ')' '{' stmtlist '}' {$ctx->SetDataType(kFunctionDefinition); $ctx->identifier()->SetDataType(kFunctionName); $ctx->type()->SetDataType(kFunctionReturnType); $ctx->stmtlist()->SetDataType(kFunctionBody); $ctx->stmtlist()->SetScopeType(kScopeFunction);};

argument_list : argument
              | argument ',' argument_list ;

argument: type identifier {$ctx->SetDataType(kFunctionArgument); $ctx->identifier()->SetDataType(kVariableName);};

assign_expr : identifier '=' expr {$ctx->identifier()->SetDataType(kVariableName);}
            | identifier  {$ctx->identifier()->SetDataType(kVariableName);} ;

forstmt : 'FOR' '(' expr ')' '{' stmtlist '}' ;

expr : expr '+' expr
     | member_access
     | bexpr ;

member_access : identifier '.' identifier
              | identifier '.' member_access ;

bexpr : 'TEST'
      | cexpr ;

cexpr : identifier
      | float_literal
      | string_literal
      | int_literal ;

float_literal : FLOATLITERAL ;

int_literal : INTLITERAL {$ctx->isIntLiteral = true;};

string_literal : STRINGLITERAL ;

identifier : IDENTIFIER {$ctx->isStringLiteral=true; $ctx->SetDataType(kFixUnit);};

IDENTIFIER : [a-zA-Z_][a-zA-Z0-9_]* ;
INTLITERAL : [0-9]+;
FLOATLITERAL : [0-9]+ '.' [0-9]+;
STRINGLITERAL : '"' .*? '"' | '\'' .*? '\'' ;

// Ignore everything below this line
WS : [ \t\r\n] -> skip ;
COMMENT : '/*' .*? '*/' -> skip ;
