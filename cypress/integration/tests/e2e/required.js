describe('Test required fields', function() {
  it('Visits the form', function() {
    cy.visit('localhost:8080')

    cy.contains('Nome')
    cy.contains('CPF')
    cy.contains('Data de nascimento')
    cy.contains('Telefone')
    cy.contains('E-mail')
    cy.contains('CEP')
    cy.contains('Endereço')
    cy.contains('Número')
    cy.contains('Complemento')
    cy.contains('Enviar').click()
 })
})
