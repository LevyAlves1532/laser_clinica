# LaserClínica | Landing Page Demonstrativa

Projeto demonstrativo de uma landing page para uma clínica de estética, focada em depilação a laser. A página apresenta o procedimento, seus benefícios, etapas do tratamento, regiões atendidas, informações de segurança e perguntas frequentes, com chamadas para conversão pelo WhatsApp.

> Este projeto é uma demonstração de interface e não representa uma clínica real. Preços, avaliações, resultados, endereço, registros, horários, depoimentos e afirmações sobre o tratamento são conteúdo ilustrativo e precisam ser verificados e substituídos antes de qualquer uso público.

## Funcionalidades

- Página única, composta por seções PHP reutilizáveis.
- Layout responsivo para celular, tablet e desktop.
- Cabeçalho fixo com navegação por seções e menu expansível em telas menores.
- Seções de apresentação, diferenciais, etapas do tratamento, regiões e combos, evolução clínica, biossegurança, depoimentos, FAQ e chamada final.
- Cards reutilizáveis para benefícios, etapas, regiões, evolução, tecnologias, contraindicações, depoimentos e itens de confiança.
- FAQ em formato de acordeão: apenas uma resposta pode ficar aberta por vez.
- Aviso demonstrativo de cookies/LGPD que pode ser fechado; a escolha fica registrada no `localStorage` do navegador.
- Botão flutuante de contato e mensagem temporária de tempo de resposta.
- Metadados básicos para mecanismos de busca e compartilhamento, além dos dados estruturados `MedicalClinic` e `FAQPage`.
- Elementos semânticos e atributos ARIA em controles interativos.

## Tecnologias

| Tecnologia | Uso |
| :--- | :--- |
| PHP | Composição das seções e renderização de componentes |
| HTML5 | Estrutura semântica da página |
| CSS3 | Identidade visual, layouts e responsividade |
| JavaScript | Menu, acordeão, estado do cabeçalho, aviso e mensagem flutuante |
| Google Fonts | Tipografia Plus Jakarta Sans |
| Material Symbols | Ícones |

## Requisitos

- PHP 7.4 ou superior.
- Navegador moderno com JavaScript habilitado.
- Acesso à internet para carregar fontes, ícones e imagens externas.

Não há gerenciador de dependências, banco de dados ou processo de build configurado.

## Executar localmente

Na raiz do projeto, inicie o servidor embutido do PHP:

```bash
php -S localhost:8000
```

Abra [http://localhost:8000](http://localhost:8000) no navegador. Encerre o servidor com `Ctrl+C`.

Também é possível servir o projeto em outro servidor web com suporte a PHP, apontando-o para a raiz do projeto.

## Interações

- **Navegação:** os links do cabeçalho levam às seções correspondentes; em telas menores, o menu abre pelo botão e fecha ao selecionar um link, pressionar `Escape` ou clicar fora dele.
- **FAQ:** clicar em uma pergunta mostra sua resposta e fecha qualquer outra que esteja aberta.
- **Aviso de cookies:** o botão “Entendido e Fechar” oculta o aviso e grava a escolha no armazenamento local do navegador.
- **Atalho flutuante:** a mensagem de tempo de resposta desaparece após cinco segundos; o botão permanece visível.
- **Conversão:** os botões de contato usam atualmente links de demonstração (`#whatsapp`), sem integração com um número real, API ou formulário de agendamento.

## Estrutura do projeto

```text
.
├── index.php                       # Documento principal, metadados e montagem das seções
├── components.php                  # Registro dos componentes reutilizáveis
├── components/                     # Elementos de interface parametrizados
│   ├── button.php
│   ├── card-banner.php
│   ├── combo-offer.php
│   ├── contraindication-item.php
│   ├── differential-card.php
│   ├── evolution-card.php
│   ├── faq-item.php
│   ├── region-card.php
│   ├── technology-card.php
│   ├── testimonial-card.php
│   ├── treatment-step.php
│   └── trust-item.php
├── containers/                     # Seções incluídas na página inicial
│   ├── banner.php
│   ├── cta.php
│   ├── differentials.php
│   ├── evolution.php
│   ├── faq.php
│   ├── floating-tools.php
│   ├── footer.php
│   ├── header.php
│   ├── regions.php
│   ├── safety.php
│   ├── testimonials.php
│   └── treatment.php
└── assets/
	├── css/
	│   └── app.css                 # Estilos e breakpoints responsivos
	└── js/
		└── app.js                  # Interações da página
```

## Organização

`index.php` carrega o registro em `components.php` e inclui os arquivos de `containers/`. Cada container representa uma seção completa e pode chamar componentes parametrizados de `components/` para renderizar conteúdo repetido.

Edite os textos e os dados de cada seção no container correspondente. O CSS fica em `assets/css/app.css`; as interações JavaScript ficam em `assets/js/app.js`.

## Antes de publicar

- Troque o domínio de demonstração nos metadados `canonical`, `hreflang` e dados estruturados pelo domínio definitivo. Configure também uma imagem real para compartilhamento social.
- Substitua `#whatsapp` por um link `wa.me` com o número oficial e mensagem apropriada. Atualize os demais links de redes sociais e páginas legais, que atualmente são âncoras de exemplo.
- Verifique e atualize endereço, telefone, horários, CNPJ, registros profissionais e dados de funcionamento.
- Revise preços, condições comerciais, depoimentos, avaliações, percentuais de resultado, contraindicações e demais alegações com a equipe clínica e jurídica responsável.
- Substitua imagens e avatares externos por materiais autorizados. Confirme direitos de uso e privacidade.
- O aviso de cookies é somente visual: não implementa gerenciamento de consentimento, bloqueio de cookies de terceiros ou ferramenta de conformidade com a LGPD.
- Os dados estruturados devem refletir informações reais e visíveis na página. Não publique dados fictícios ou avaliações não verificadas como fatos.
