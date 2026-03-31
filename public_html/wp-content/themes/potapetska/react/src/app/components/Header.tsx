import { useState, useEffect, useRef } from "react";
import { Link } from "react-router";
import logoImg from "figma:asset/879fb8aa6a825e6794fa2277cfbdaf481e3af546.png";

const navLinks = [
  { label: "Služby", href: "#sluzby", isExternal: false },
  { label: "Technika & Půjčovna", href: "#technika", isExternal: false },
  { label: "O nás", href: "/o-nas", isExternal: true },
  { label: "Reference", href: "#reference", isExternal: false },
  { label: "Kontakt", href: "#kontakt", isExternal: false },
];

export function Header() {
  const [scrolled, setScrolled] = useState(false);
  const [menuOpen, setMenuOpen] = useState(false);
  const [topBarVisible, setTopBarVisible] = useState(true);
  const lastScrollY = useRef(0);

  useEffect(() => {
    const handleScroll = () => {
      const currentY = window.scrollY;
      setScrolled(currentY > 40);
      setTopBarVisible(currentY < 60);
      lastScrollY.current = currentY;
    };
    window.addEventListener("scroll", handleScroll, { passive: true });
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  const handleNavClick = (href: string) => {
    setMenuOpen(false);
    const el = document.querySelector(href);
    if (el) el.scrollIntoView({ behavior: "smooth" });
  };

  return (
    <header
      className="fixed top-0 left-0 right-0 z-50 w-full transition-all duration-300"
      style={{
        background: scrolled ? "#033869" : "rgba(3, 56, 105, 0.97)",
        boxShadow: scrolled ? "0 2px 32px rgba(3,56,105,0.4)" : "none",
        fontFamily: "'Barlow', sans-serif",
      }}
    >
      {/* Top bar – phone */}
      <div
        style={{
          background: "#fcdb00",
          borderBottom: topBarVisible ? "2px solid rgba(3,56,105,0.15)" : "none",
          overflow: "hidden",
          maxHeight: topBarVisible ? "48px" : "0px",
          paddingTop: topBarVisible ? "6px" : "0px",
          paddingBottom: topBarVisible ? "6px" : "0px",
          opacity: topBarVisible ? 1 : 0,
          transition: "max-height 0.3s ease, opacity 0.25s ease, padding 0.3s ease",
        }}
      >
        <div className="max-w-screen-xl mx-auto px-6 flex items-center justify-between">
          <span style={{ color: "#033869", fontSize: "0.8rem", letterSpacing: "0.04em", fontWeight: 500 }}>
            POTÁPĚČSKÁ STANICE a.s. — Profesionální podvodní práce od roku 1990
          </span>
          <div style={{ display: "flex", alignItems: "center", gap: "24px" }}>
            <a
              href="tel:+420312681158"
              style={{
                color: "#033869",
                fontSize: "0.85rem",
                fontWeight: 700,
                letterSpacing: "0.06em",
                display: "flex",
                alignItems: "center",
                gap: "6px",
                textDecoration: "none",
              }}
            >
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5">
                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.12 1.18 2 2 0 012.11 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" />
              </svg>
              +420 312 681 158
            </a>
            <a
              href="mailto:info@potapecska-stanice.cz"
              style={{
                color: "#033869",
                fontSize: "0.85rem",
                fontWeight: 700,
                letterSpacing: "0.06em",
                display: "flex",
                alignItems: "center",
                gap: "6px",
                textDecoration: "none",
              }}
            >
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                <polyline points="22,6 12,13 2,6" />
              </svg>
              info@potapecska-stanice.cz
            </a>
          </div>
        </div>
      </div>

      {/* Main nav */}
      <div className="max-w-screen-xl mx-auto px-6 flex items-center justify-between" style={{ height: "76px" }}>
        {/* Logo */}
        <a
          href="/"
          style={{ flexShrink: 0, textDecoration: "none" }}
        >
          <img
            src={logoImg}
            alt="Potápěčská Stanice a.s."
            style={{ height: "56px", width: "auto", display: "block" }}
          />
        </a>

        {/* Desktop nav – aligned right */}
        <nav
          className="hidden lg:flex items-center"
          style={{ gap: "0", justifyContent: "flex-end" }}
        >
          {navLinks.map((link) =>
            link.isExternal ? (
              <Link
                key={link.href}
                to={link.href}
                style={{
                  color: "#e2e8f0",
                  fontSize: "0.88rem",
                  fontWeight: 500,
                  letterSpacing: "0.06em",
                  textTransform: "uppercase",
                  textDecoration: "none",
                  padding: "0 20px",
                  height: "76px",
                  display: "flex",
                  alignItems: "center",
                  borderBottom: "3px solid transparent",
                  transition: "all 0.2s",
                }}
                onMouseEnter={(e) => {
                  (e.currentTarget as HTMLElement).style.color = "#fcdb00";
                  (e.currentTarget as HTMLElement).style.borderBottomColor = "#fcdb00";
                }}
                onMouseLeave={(e) => {
                  (e.currentTarget as HTMLElement).style.color = "#e2e8f0";
                  (e.currentTarget as HTMLElement).style.borderBottomColor = "transparent";
                }}
              >
                {link.label}
              </Link>
            ) : (
              <a
                key={link.href}
                href={link.href}
                onClick={(e) => {
                  e.preventDefault();
                  handleNavClick(link.href);
                }}
                style={{
                  color: "#e2e8f0",
                  fontSize: "0.88rem",
                  fontWeight: 500,
                  letterSpacing: "0.06em",
                  textTransform: "uppercase",
                  textDecoration: "none",
                  padding: "0 20px",
                  height: "76px",
                  display: "flex",
                  alignItems: "center",
                  borderBottom: "3px solid transparent",
                  transition: "all 0.2s",
                }}
                onMouseEnter={(e) => {
                  (e.currentTarget as HTMLElement).style.color = "#fcdb00";
                  (e.currentTarget as HTMLElement).style.borderBottomColor = "#fcdb00";
                }}
                onMouseLeave={(e) => {
                  (e.currentTarget as HTMLElement).style.color = "#e2e8f0";
                  (e.currentTarget as HTMLElement).style.borderBottomColor = "transparent";
                }}
              >
                {link.label}
              </a>
            )
          )}

          {/* Divider */}
          <div style={{ width: "1px", height: "28px", background: "rgba(255,255,255,0.15)", margin: "0 16px" }} />

          {/* Main CTA */}
          <a
            href="#kontakt"
            onClick={(e) => { e.preventDefault(); handleNavClick("#kontakt"); }}
            style={{
              marginLeft: "16px",
              background: "#fcdb00",
              color: "#033869",
              fontSize: "0.85rem",
              fontWeight: 700,
              letterSpacing: "0.08em",
              textTransform: "uppercase",
              textDecoration: "none",
              padding: "10px 22px",
              borderRadius: "3px",
              transition: "all 0.2s",
              whiteSpace: "nowrap",
            }}
            onMouseEnter={(e) => {
              (e.currentTarget as HTMLElement).style.background = "#e5c500";
              (e.currentTarget as HTMLElement).style.transform = "translateY(-1px)";
              (e.currentTarget as HTMLElement).style.boxShadow = "0 4px 16px rgba(252,219,0,0.4)";
            }}
            onMouseLeave={(e) => {
              (e.currentTarget as HTMLElement).style.background = "#fcdb00";
              (e.currentTarget as HTMLElement).style.transform = "none";
              (e.currentTarget as HTMLElement).style.boxShadow = "none";
            }}
          >
            Poptat služby
          </a>
        </nav>

        {/* Mobile hamburger */}
        <button
          className="lg:hidden"
          onClick={() => setMenuOpen(!menuOpen)}
          style={{ color: "#fcdb00", background: "none", border: "none", cursor: "pointer", padding: "8px" }}
        >
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
            {menuOpen ? (
              <>
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
              </>
            ) : (
              <>
                <line x1="3" y1="6" x2="21" y2="6" />
                <line x1="3" y1="12" x2="21" y2="12" />
                <line x1="3" y1="18" x2="21" y2="18" />
              </>
            )}
          </svg>
        </button>
      </div>

      {/* Mobile menu */}
      {menuOpen && (
        <div
          style={{
            background: "#022d5e",
            borderTop: "2px solid #fcdb00",
            padding: "16px 24px 24px",
          }}
          className="lg:hidden"
        >
          {navLinks.map((link) => (
            <a
              key={link.href}
              href={link.href}
              onClick={(e) => { e.preventDefault(); handleNavClick(link.href); }}
              style={{
                display: "block",
                color: "#e2e8f0",
                fontSize: "1rem",
                fontWeight: 500,
                textDecoration: "none",
                padding: "12px 0",
                borderBottom: "1px solid rgba(255,255,255,0.08)",
                letterSpacing: "0.04em",
              }}
            >
              {link.label}
            </a>
          ))}
          <div style={{ marginTop: "20px", display: "flex", flexDirection: "column", gap: "12px" }}>
            <a
              href="tel:+420312681158"
              style={{
                display: "flex",
                alignItems: "center",
                gap: "8px",
                color: "#fcdb00",
                fontSize: "1rem",
                fontWeight: 700,
                textDecoration: "none",
              }}
            >
              📞 +420 312 681 158
            </a>
            <a
              href="#kontakt"
              onClick={(e) => { e.preventDefault(); handleNavClick("#kontakt"); }}
              style={{
                background: "#fcdb00",
                color: "#033869",
                fontWeight: 700,
                textDecoration: "none",
                padding: "12px 20px",
                borderRadius: "3px",
                textAlign: "center",
                letterSpacing: "0.06em",
                textTransform: "uppercase",
                fontSize: "0.9rem",
              }}
            >
              Poptat služby
            </a>
          </div>
        </div>
      )}
    </header>
  );
}