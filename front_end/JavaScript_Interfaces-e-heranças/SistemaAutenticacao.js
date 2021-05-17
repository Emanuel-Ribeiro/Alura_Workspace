export class SistemaAutenticacao
{
  static login(autenticavel, senha)
  {
    if(SistemaAutenticacao.ehAutenticavel(autenticavel))
    {
      return autenticavel.autentica(senha)
    }
    return false;
  }

  static ehAutenticavel(autenticavel)
  {
    return "autenticar" in autenticavel && autenticavel.autentica instanceof Function //verifica se a chave autenticar existe dentro de autenticavel
  }
}