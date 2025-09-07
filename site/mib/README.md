# MIB - Mangueiras de Incêndio Brasil

Site institucional da MIB, especializada em equipamentos contra incêndio e mangueiras de segurança.

## 🚀 Funcionalidades Implementadas

### ✅ Sistema Modular
- **Header e Footer**: Componentes reutilizáveis em todas as páginas
- **Breadcrumbs**: Navegação hierárquica automática
- **Template de Página**: Estrutura padronizada para novas páginas

### ✅ Página de Contato (`contact.php`)
- **Formulário de Contato**: Com validação e processamento PHP
- **Informações da Empresa**: Telefone, WhatsApp, email e localização
- **Mapa Google**: Localização em São Paulo, SP
- **Redes Sociais**: Links para Facebook, Instagram, LinkedIn, YouTube
- **Horário de Atendimento**: Informações detalhadas de funcionamento
- **Design Responsivo**: Adaptável a todos os dispositivos

### ✅ Página de Política de Privacidade (`privacy.php`)
- **Conteúdo Completo**: Política detalhada seguindo LGPD
- **Seções Organizadas**: Coleta, uso, compartilhamento, cookies, segurança
- **Direitos do Usuário**: Explicação clara dos direitos LGPD
- **Informações de Contato**: Como exercer direitos de privacidade

### ✅ Ícone de Contato Flutuante
- **Acesso Rápido**: Ícone flutuante em todas as páginas
- **Modal Completo**: Abre página de contato completa em modal
- **Informações Detalhadas**: Cards com telefone, WhatsApp, email, localização
- **Horário de Atendimento**: Informações de funcionamento
- **Formulário Integrado**: Formulário de contato funcional
- **Animações**: Efeitos visuais e transições suaves
- **Responsivo**: Adaptável a dispositivos móveis

### ✅ Sistema de Cookies (LGPD)
- **Banner de Cookies**: Notificação automática para usuários
- **Controles de Aceitação**: Botões para aceitar ou recusar
- **Armazenamento Local**: Preferências salvas no navegador
- **Conformidade**: Seguindo diretrizes de proteção de dados

### ✅ WhatsApp Integrado
- **Links Padronizados**: Formato único em todo o site
- **Mensagem Pré-definida**: Texto automático para contato
- **Ícone Flutuante**: Acesso rápido via WhatsApp
- **Links Sociais**: Integração nas redes sociais do footer

### ✅ Componentes Reutilizáveis
- **`contact-section.php`**: Formulário de contato modular
- **`breadcrumb.php`**: Sistema de navegação hierárquica
- **`template-page.php`**: Estrutura padrão para novas páginas

## 📁 Estrutura dos Arquivos

```
├── contact.php                    # Página principal de contato
├── includes/
│   ├── contact-section.php       # Componente do formulário
│   ├── config.php               # Configurações e funções
│   ├── header.php               # Cabeçalho do site
│   └── footer.php               # Rodapé do site
└── assets/
    └── css/
        └── style.css            # Estilos principais + contato
```

## 🎨 Características da Página de Contato

### Seções Implementadas:
1. **Hero Section** - Título e descrição da página
2. **Informações de Contato** - Telefone, WhatsApp, Email
3. **Formulário de Contato** - Campos para solicitação
4. **Mapa do Google** - Localização em São Paulo
5. **Redes Sociais** - Links para todas as plataformas
6. **Horário de Atendimento** - Informações detalhadas

### Funcionalidades:
- ✅ Formulário funcional com validação
- ✅ Processamento PHP com sanitização
- ✅ Mensagens de feedback para o usuário
- ✅ Design responsivo e moderno
- ✅ Integração com sistema de navegação
- ✅ SEO otimizado com meta tags

## 🎯 Como Usar

### 📱 Ícone de Contato Flutuante

O ícone de contato flutuante está disponível em **todas as páginas** do site e oferece acesso rápido às informações de contato:

#### **Funcionalidades:**
- **Posição**: Canto inferior direito, acima do ícone do WhatsApp
- **Visual**: Ícone de envelope em laranja com animação flutuante
- **Acesso**: Clique para abrir modal completo de contato

#### **Conteúdo do Modal:**
1. **Informações de Contato** (4 cards):
   - 📞 Telefone: (11) 94025-8669
   - 💬 WhatsApp: (11) 94025-8669
   - 📧 Email: contato@mangueirasdeincendiobrasil.com.br
   - 📍 Localização: São Paulo, SP

2. **Horário de Atendimento**:
   - Segunda a Sexta: 08:00 às 17:30
   - Sábado: 08:00 às 12:00
   - Domingo e feriados: Fechado

3. **Formulário de Contato**:
   - Nome, Email, Telefone, Tipo de Cliente, Mensagem
   - Validação em tempo real
   - Processamento PHP integrado

#### **Controles do Modal:**
- **Abrir**: Clique no ícone flutuante
- **Fechar**: Botão X, tecla ESC, ou clique fora do modal
- **Navegação**: Tab para navegar entre campos
- **Responsivo**: Adapta-se a todos os dispositivos

### 🔧 Personalização

#### **Estilos CSS:**
```css
/* Cor do ícone flutuante */
.contact-link {
    background: linear-gradient(135deg, var(--mib-orange) 0%, var(--mib-orange-dark) 100%);
}

/* Posicionamento */
.contact-float {
    bottom: 100px;  /* Distância do fundo */
    right: 20px;    /* Distância da direita */
}
```

#### **JavaScript:**
```javascript
// Abrir modal programaticamente
MIB.openContactModal();

// Fechar modal programaticamente
MIB.closeContactModal();
```

## 🗺️ Mapa do Google

### Configuração Atual:
- **Localização**: São Paulo, SP (coordenadas padrão)
- **Tamanho**: 450px de altura, responsivo
- **Estilo**: Bordas arredondadas com sombra

### Para Atualizar o Endereço:
1. Acesse [Google Maps](https://maps.google.com)
2. Localize o endereço correto da empresa
3. Clique em "Compartilhar" → "Incorporar mapa"
4. Copie o código do iframe
5. Substitua no arquivo `contact.php` na seção do mapa

## 📱 Responsividade

A página é totalmente responsiva e funciona em:
- ✅ Desktop (1200px+)
- ✅ Tablet (768px - 1199px)
- ✅ Mobile (até 767px)

## 🎯 Próximos Passos

### Funcionalidades Futuras:
- [ ] Integração com sistema de email real
- [ ] Chat online em tempo real
- [ ] Agendamento de visitas técnicas
- [ ] Sistema de tickets de suporte
- [ ] Integração com WhatsApp Business API

### Melhorias Técnicas:
- [ ] Validação JavaScript no frontend
- [ ] Sistema de captcha anti-spam
- [ ] Logs de contatos recebidos
- [ ] Notificações por email para administradores

## 🚨 Suporte

Para dúvidas ou problemas:
- **Email**: contato@mangueirasdeincendiobrasil.com.br
- **WhatsApp**: (11) 99999-9999
- **Horário**: Segunda a Sexta, 8h às 17h30

---

**Desenvolvido por Biss Solutions**  
**Versão**: 2.0  
**Data**: 2025
