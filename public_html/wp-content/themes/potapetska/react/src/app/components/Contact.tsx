import { useState } from "react";

export function Contact() {
  const [formData, setFormData] = useState({
    name: "",
    company: "",
    email: "",
    phone: "",
    message: "",
  });
  const [gdprConsent, setGdprConsent] = useState(false);
  const [submitted, setSubmitted] = useState(false);

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    setSubmitted(true);
    setTimeout(() => setSubmitted(false), 4000);
    setFormData({ name: "", company: "", email: "", phone: "", message: "" });
    setGdprConsent(false);
  };

  const inputStyle: React.CSSProperties = {
    width: "100%",
    background: "rgba(255,255,255,0.07)",
    border: "1px solid rgba(255,255,255,0.15)",
    borderRadius: "3px",
    color: "#ffffff",
    fontSize: "0.9rem",
    padding: "11px 14px",
    outline: "none",
    fontFamily: "'Barlow', sans-serif",
    transition: "border-color 0.2s",
    boxSizing: "border-box",
  };

  const labelStyle: React.CSSProperties = {
    display: "block",
    color: "rgba(226,232,240,0.65)",
    fontSize: "0.72rem",
    fontWeight: 700,
    letterSpacing: "0.1em",
    textTransform: "uppercase",
    marginBottom: "6px",
  };

  return (
    <section
      id="kontakt"
      style={{
        fontFamily: "'Barlow', sans-serif",
        background: "#022d5e",
        padding: "80px 0",
        position: "relative",
        overflow: "hidden",
      }}
    >
      {/* Top accent line */}
      <div
        style={{
          position: "absolute",
          top: 0,
          left: 0,
          right: 0,
          height: "4px",
          background: "linear-gradient(to right, #fcdb00 0%, rgba(252,219,0,0.2) 100%)",
        }}
      />

      <div className="max-w-screen-xl mx-auto px-6">
        {/* Section header */}
        <div style={{ marginBottom: "48px" }}>
          <div style={{ display: "flex", alignItems: "center", gap: "10px", marginBottom: "12px" }}>
            <div style={{ width: "36px", height: "3px", background: "#fcdb00" }} />
            <span
              style={{
                color: "#fcdb00",
                fontSize: "0.78rem",
                fontWeight: 700,
                letterSpacing: "0.16em",
                textTransform: "uppercase",
              }}
            >
              Kontakt
            </span>
          </div>
          <h2
            style={{
              fontFamily: "'Barlow Condensed', sans-serif",
              fontSize: "clamp(2rem, 3vw, 2.6rem)",
              fontWeight: 800,
              color: "#ffffff",
              textTransform: "uppercase",
              lineHeight: 1.1,
            }}
          >
            Napište nám nebo zavolejte
          </h2>
        </div>

        {/* Two columns */}
        <div
          style={{
            display: "grid",
            gridTemplateColumns: "360px 1fr",
            gap: "48px",
            alignItems: "start",
          }}
          className="lg:grid-cols-[360px_1fr] grid-cols-1"
        >
          {/* Left: contact info */}
          <div style={{ display: "flex", flexDirection: "column", gap: "0" }}>

            {/* Emergency box */}
            <div
              style={{
                background: "#fcdb00",
                borderRadius: "4px",
                padding: "24px 28px",
                marginBottom: "20px",
              }}
            >
              <div
                style={{
                  fontFamily: "'Barlow Condensed', sans-serif",
                  fontSize: "0.72rem",
                  fontWeight: 800,
                  letterSpacing: "0.14em",
                  textTransform: "uppercase",
                  color: "#033869",
                  marginBottom: "10px",
                }}
              >
                ⚡ Pohotovostní dispečink 24/7
              </div>
              <a
                href="tel:+420312681158"
                style={{
                  display: "block",
                  fontFamily: "'Barlow Condensed', sans-serif",
                  fontSize: "1.8rem",
                  fontWeight: 900,
                  color: "#033869",
                  textDecoration: "none",
                  letterSpacing: "-0.01em",
                  lineHeight: 1,
                  marginBottom: "4px",
                }}
              >
                +420 312 681 158
              </a>
              <p style={{ color: "rgba(3,56,105,0.65)", fontSize: "0.8rem", margin: 0 }}>
                Pro urgentní zásahy a havarijní situace
              </p>
            </div>

            {/* Contact details */}
            <div
              style={{
                background: "rgba(255,255,255,0.05)",
                border: "1px solid rgba(255,255,255,0.1)",
                borderRadius: "4px",
                padding: "24px 28px",
                display: "flex",
                flexDirection: "column",
                gap: "16px",
              }}
            >
              {[
                {
                  label: "Telefon",
                  value: "+420 312 681 158",
                  href: "tel:+420312681158",
                },
                {
                  label: "E-mail",
                  value: "info@potapecska-stanice.cz",
                  href: "mailto:info@potapecska-stanice.cz",
                },
                {
                  label: "Sídlo",
                  value: "Kladno, Česká republika",
                  href: undefined,
                },
                {
                  label: "IČO",
                  value: "25143861",
                  href: undefined,
                },
                {
                  label: "Provozní doba",
                  value: "Po–Pá 07:00–16:00",
                  href: undefined,
                },
              ].map((item, i) => (
                <div key={i}>
                  <div
                    style={{
                      color: "rgba(226,232,240,0.45)",
                      fontSize: "0.68rem",
                      fontWeight: 700,
                      letterSpacing: "0.12em",
                      textTransform: "uppercase",
                      marginBottom: "3px",
                    }}
                  >
                    {item.label}
                  </div>
                  {item.href ? (
                    <a
                      href={item.href}
                      style={{
                        color: "#fcdb00",
                        fontSize: "0.92rem",
                        fontWeight: 600,
                        textDecoration: "none",
                      }}
                    >
                      {item.value}
                    </a>
                  ) : (
                    <span style={{ color: "rgba(226,232,240,0.85)", fontSize: "0.92rem" }}>
                      {item.value}
                    </span>
                  )}
                </div>
              ))}
            </div>
          </div>

          {/* Right: form */}
          <div
            style={{
              background: "rgba(255,255,255,0.04)",
              border: "1px solid rgba(255,255,255,0.1)",
              borderRadius: "4px",
              padding: "36px 40px",
            }}
          >
            <h3
              style={{
                fontFamily: "'Barlow Condensed', sans-serif",
                fontSize: "1.4rem",
                fontWeight: 800,
                color: "#ffffff",
                textTransform: "uppercase",
                letterSpacing: "0.04em",
                marginBottom: "6px",
              }}
            >
              Poptávkový formulář
            </h3>
            <p style={{ color: "rgba(226,232,240,0.55)", fontSize: "0.85rem", marginBottom: "28px", lineHeight: 1.6 }}>
              Odpovíme do 24 hodin v pracovní dny.
            </p>

            {submitted && (
              <div
                style={{
                  background: "rgba(252,219,0,0.12)",
                  border: "1px solid rgba(252,219,0,0.4)",
                  borderRadius: "3px",
                  padding: "14px 18px",
                  marginBottom: "20px",
                  color: "#fcdb00",
                  fontSize: "0.88rem",
                  fontWeight: 600,
                  display: "flex",
                  alignItems: "center",
                  gap: "10px",
                }}
              >
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5">
                  <polyline points="20 6 9 17 4 12" />
                </svg>
                Poptávka odeslána. Brzy se vám ozveme!
              </div>
            )}

            <form onSubmit={handleSubmit}>
              <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: "14px", marginBottom: "14px" }}>
                <div>
                  <label style={labelStyle}>Jméno *</label>
                  <input
                    required
                    type="text"
                    value={formData.name}
                    onChange={(e) => setFormData({ ...formData, name: e.target.value })}
                    placeholder="Petr Novák"
                    style={inputStyle}
                    onFocus={(e) => { (e.target as HTMLInputElement).style.borderColor = "#fcdb00"; }}
                    onBlur={(e) => { (e.target as HTMLInputElement).style.borderColor = "rgba(255,255,255,0.15)"; }}
                  />
                </div>
                <div>
                  <label style={labelStyle}>Firma</label>
                  <input
                    type="text"
                    value={formData.company}
                    onChange={(e) => setFormData({ ...formData, company: e.target.value })}
                    placeholder="Název firmy"
                    style={inputStyle}
                    onFocus={(e) => { (e.target as HTMLInputElement).style.borderColor = "#fcdb00"; }}
                    onBlur={(e) => { (e.target as HTMLInputElement).style.borderColor = "rgba(255,255,255,0.15)"; }}
                  />
                </div>
              </div>
              <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: "14px", marginBottom: "14px" }}>
                <div>
                  <label style={labelStyle}>E-mail *</label>
                  <input
                    required
                    type="email"
                    value={formData.email}
                    onChange={(e) => setFormData({ ...formData, email: e.target.value })}
                    placeholder="vas@email.cz"
                    style={inputStyle}
                    onFocus={(e) => { (e.target as HTMLInputElement).style.borderColor = "#fcdb00"; }}
                    onBlur={(e) => { (e.target as HTMLInputElement).style.borderColor = "rgba(255,255,255,0.15)"; }}
                  />
                </div>
                <div>
                  <label style={labelStyle}>Telefon</label>
                  <input
                    type="tel"
                    value={formData.phone}
                    onChange={(e) => setFormData({ ...formData, phone: e.target.value })}
                    placeholder="+420 xxx xxx xxx"
                    style={inputStyle}
                    onFocus={(e) => { (e.target as HTMLInputElement).style.borderColor = "#fcdb00"; }}
                    onBlur={(e) => { (e.target as HTMLInputElement).style.borderColor = "rgba(255,255,255,0.15)"; }}
                  />
                </div>
              </div>
              <div style={{ marginBottom: "14px" }}>
                <label style={labelStyle}>Typ služby</label>
                <select
                  value={formData.service}
                  onChange={(e) => setFormData({ ...formData, service: e.target.value })}
                  style={{ ...inputStyle, cursor: "pointer" }}
                  onFocus={(e) => { (e.target as HTMLSelectElement).style.borderColor = "#fcdb00"; }}
                  onBlur={(e) => { (e.target as HTMLSelectElement).style.borderColor = "rgba(255,255,255,0.15)"; }}
                >
                  <option value="" style={{ background: "#022d5e" }}>Vyberte službu...</option>
                  <option value="stavebni" style={{ background: "#022d5e" }}>Stavební potápěčské práce</option>
                  <option value="strojni" style={{ background: "#022d5e" }}>Strojní potápěčské práce</option>
                  <option value="zachranarstvi" style={{ background: "#022d5e" }}>Záchranářské práce</option>
                  <option value="podzemni" style={{ background: "#022d5e" }}>Podzemní práce</option>
                  <option value="specialni" style={{ background: "#022d5e" }}>Speciální práce</option>
                  <option value="nadrze" style={{ background: "#022d5e" }}>Průmyslové nádrže</option>
                  <option value="video" style={{ background: "#022d5e" }}>Video & Fotodokumentace</option>
                  <option value="znalec" style={{ background: "#022d5e" }}>Soudní znalec</option>
                  <option value="pujcovna" style={{ background: "#022d5e" }}>Půjčovna techniky</option>
                  <option value="jine" style={{ background: "#022d5e" }}>Jiné / Konzultace</option>
                </select>
              </div>
              <div style={{ marginBottom: "20px" }}>
                <label style={labelStyle}>Popis projektu *</label>
                <textarea
                  required
                  rows={4}
                  value={formData.message}
                  onChange={(e) => setFormData({ ...formData, message: e.target.value })}
                  placeholder="Popište váš projekt, lokalitu a specifické požadavky..."
                  style={{ ...inputStyle, resize: "vertical", minHeight: "100px" }}
                  onFocus={(e) => { (e.target as HTMLTextAreaElement).style.borderColor = "#fcdb00"; }}
                  onBlur={(e) => { (e.target as HTMLTextAreaElement).style.borderColor = "rgba(255,255,255,0.15)"; }}
                />
              </div>

              {/* GDPR consent */}
              <label
                style={{
                  display: "flex",
                  alignItems: "flex-start",
                  gap: "12px",
                  marginBottom: "20px",
                  cursor: "pointer",
                }}
              >
                <input
                  type="checkbox"
                  required
                  checked={gdprConsent}
                  onChange={(e) => setGdprConsent(e.target.checked)}
                  style={{
                    marginTop: "2px",
                    width: "16px",
                    height: "16px",
                    flexShrink: 0,
                    accentColor: "#fcdb00",
                    cursor: "pointer",
                  }}
                />
                <span style={{ color: "rgba(226,232,240,0.55)", fontSize: "0.78rem", lineHeight: 1.6 }}>
                  Souhlasím se{" "}
                  <a
                    href="#"
                    onClick={(e) => e.preventDefault()}
                    style={{ color: "#fcdb00", textDecoration: "underline" }}
                  >
                    zpracováním osobních údajů
                  </a>{" "}
                  společností Potápěčská Stanice a.s. za účelem vyřízení mé poptávky.
                  Souhlas mohu kdykoli odvolat. *
                </span>
              </label>
              <button
                type="submit"
                style={{
                  width: "100%",
                  background: "#fcdb00",
                  color: "#033869",
                  fontFamily: "'Barlow', sans-serif",
                  fontSize: "0.88rem",
                  fontWeight: 700,
                  letterSpacing: "0.1em",
                  textTransform: "uppercase",
                  border: "none",
                  padding: "14px",
                  borderRadius: "3px",
                  cursor: "pointer",
                  display: "flex",
                  alignItems: "center",
                  justifyContent: "center",
                  gap: "10px",
                  transition: "all 0.2s",
                }}
                onMouseEnter={(e) => {
                  (e.currentTarget as HTMLElement).style.background = "#e5c500";
                  (e.currentTarget as HTMLElement).style.boxShadow = "0 6px 24px rgba(252,219,0,0.4)";
                }}
                onMouseLeave={(e) => {
                  (e.currentTarget as HTMLElement).style.background = "#fcdb00";
                  (e.currentTarget as HTMLElement).style.boxShadow = "none";
                }}
              >
                Odeslat poptávku
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5">
                  <line x1="22" y1="2" x2="11" y2="13" />
                  <polygon points="22 2 15 22 11 13 2 9 22 2" />
                </svg>
              </button>
              <p style={{ color: "rgba(226,232,240,0.35)", fontSize: "0.7rem", textAlign: "center", marginTop: "10px" }}>
                Vaše údaje jsou v bezpečí a nebudou předány třetím stranám.
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>
  );
}