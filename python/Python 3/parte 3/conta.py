class Conta:

  def __init__(self, numero, titular, saldo, limite):
    # __init__ constroi o objeto
    # self faz a referencia a instancia do objeto que chama os seus metodos(funçoes)
    print("Contruindo objeto...")
    self.__numero = numero
    self.__titular = titular
    self.__saldo = saldo
    self.__limite = limite

  def extrato(self):

    print(f"Saldo de {self.__saldo} reais do {self.__titular}")

  def deposita(self, valor):

    self.__saldo += valor
    print(f"Foi depositado R${valor} e agora o saldo é de R${self.__saldo}")

  def saca(self, valor):

    self.__saldo -= valor
    print(f"Foi sacado R${valor} e agora o saldo é de R${self.__saldo}")
