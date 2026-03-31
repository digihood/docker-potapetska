import { useState } from "react";

export function SimpleContactForm() {
  const [formData, setFormData] = useState({
    name: "",
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
    setFormData({ name: "", email: "", phone: "", message: "" });
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
    <div
      style={{
        background: "rgba(255,255,255,0.04)",
        border: "1px solid rgba(255,255,255,0.1)",
        borderRadius: "4px",
        padding: "36px 40px",
      }}
    >
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
        <div style={{ marginBottom: "14px" }}>
          <label style={labelStyle}>Jméno a příjmení *</label>
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

        <div style={{ marginBottom: "14px" }}>
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

        <div style={{ marginBottom: "14px" }}>
          <label style={labelStyle}>Telefon *</label>
          <input
            required
            type="tel"
            value={formData.phone}
            onChange={(e) => setFormData({ ...formData, phone: e.target.value })}
            placeholder="+420 xxx xxx xxx"
            style={inputStyle}
            onFocus={(e) => { (e.target as HTMLInputElement).style.borderColor = "#fcdb00"; }}
            onBlur={(e) => { (e.target as HTMLInputElement).style.borderColor = "rgba(255,255,255,0.15)"; }}
          />
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
            společností Potápěčská Stanice a.s. za účelem vyřízení mé poptávky. *
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
      </form>
    </div>
  );
}
